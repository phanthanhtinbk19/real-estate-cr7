<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [
    HomeController::class,
    "index"
]);
Route::get('/dang-tin',  [
    PostController::class,
    "index"
]);
Route::get('/dang-nhap',  [
    AuthController::class,
    "login"
]);
Route::get('/dang-ky',  [
   AuthController::class,
    "register"
]);

Route::get('/nha-dat-ban',  [
    SaleController::class,
     "index"
 ]);
// Route::get('/nha-dat-ban/1',  [
//     DetailController::class,
//      "index"
//  ]);


Route::post('/save-login',  [
    AuthController::class,
    "save_login"
]);

Route::post('/save-register',  [
    AuthController::class,
    "save_register"
]);


//Login facebook
Route::get('/login-facebook',[
    AuthController::class,
    "login_facebook"]);
Route::get('/admin/callback',[
    AuthController::class,
    "callback_facebook"]);


//new

Route::get('/tin-tuc',  [
        NewController::class,
        "new"
    ]);
Route::get('/tin-tuc-du-an',  [
        NewController::class,
        "project"
    ]);
Route::get('/chi-tiet',  [
        DetailController::class,
        "detail"
    ]);