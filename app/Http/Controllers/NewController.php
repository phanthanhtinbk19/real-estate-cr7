<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function new(){

        return view('page.new');
       }
    public function project(){

        return view('page.project');
       }
}