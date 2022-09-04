<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function home(Request $request){

        
        $id = $request->session()->get('user_id');

        if(isset($id)){
            return view('home/home');
        }
        return view('/login/login');   
    }





    public function login(Request $request){
        $id = $request->session()->get('user_id');

        if(isset($id)){
            return view('/home/home');
        }
        return view('login/login');
    }




    public function postLoginPage(Request $request){


        $nickname= $request->nickname;
        $password=hash("sha256",$request->password);
        $item = User::select('password')->where('user_name', $nickname)->first();

        if($item->password=="" || $item->password===$password){
            session(['user_id'=>$request->nickname]);            
            return view('/home/home');
        }
        else{
            return redirect('/login')->with('message','ニックネームとパスワードが一致しません');
        }

     

    }


}