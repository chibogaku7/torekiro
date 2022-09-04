<?php

namespace App\Http\Controllers;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){


        return view('user/register');
    }


    
    public function registerDone(Request $request){

        $request->validate([
            'nickname'=>'required|unique:users,user_name',
            'password'=>'required',
        ]);


        $nickname= $request->nickname;
        $password=hash("sha256",$request->password);
        session(['user_id'=>$request->nickname]);


        $user= new User();
        $user->user_name=$nickname;
        $user->password=$password;
        $user->save();


        return view('user/register_done',['nickname'=>$nickname,'password'=>$password]);
    }
}
