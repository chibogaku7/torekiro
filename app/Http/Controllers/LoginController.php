<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function home(){
        return view('home/homefront');
    }

    public function login(){
        return view('login/login');
    }


}
