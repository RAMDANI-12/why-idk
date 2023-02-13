<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function auth(Request $request){
        $login = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        // if(Auth::attempt($login)){
        //     $request->session()->regenerate();

        //     return redirect()->intended('login');
        // }
    }

}
