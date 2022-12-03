<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Social; //sử dụng model Social
use Socialite; //sử dụng Socialite
use App\Models\Login;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;

class AuthController extends Controller
{
   public function login(Request $request){
   
    return view('page.login');
   }
   public function register(){
    return view('page.register');
   }
   
   public function save_register(Request $request){
      $request->validate([
         'email' => 'required|email|unique:tbl_admin',
         'password' => 'required|min:6|confirmed',
     ]);
      $data =array();
      $data['password'] = $request->password;
      $data['email'] = $request->email;
      DB::table('tbl_admin')->insert($data);
      return redirect("/dang-nhap");
   }
   
   public function save_login(Request $request){
      $data = $request->all();
      $email = $data['email'];
      $password =  $data['password'];
      $login= Login::where("email",$email)->where("password",$password)->first();
      // $login_count = $login->count();
      if( $login){
         return redirect("/");
      }
      else{
         return redirect("/dang-nhap");
      }
   }


   public function login_facebook(){
      return Socialite::driver('facebook')->redirect();
  }

  public function callback_facebook(){
      $provider = Socialite::driver('facebook')->user();
      $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
      if($account){
          //login in vao trang quan tri  
          $account_name = Login::where('id',$account->user)->first();
         //  Session::put('login',$account_name->name);
          Session::put('id',$account_name->id);
          return redirect('/')->with('message', 'Đăng nhập Admin thành công');
      }else{

          $customer = new Social([
              'provider_user_id' => $provider->getId(),
              'provider' => 'facebook'
          ]);

          $orang = Login::where('email',$provider->getEmail())->first();

          if(!$orang){
              $orang = Login::create([
                  // 'name' => $provider->getName(),
                  'email' => $provider->getEmail(),
                  'password' => '',
                 

              ]);
          }
          $customer->login()->associate($orang);
          $customer->save();

          $account_name = Login::where('id',$account->user)->first();

         //  Session::put('login',$account_name->name);
           Session::put('id',$account_name->id);
          return redirect('/')->with('message', 'Đăng nhập Admin thành công');
      } 
  }


}