<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){     
        return view('register.index');
    }
    public function store(Request $request){
        
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        return redirect('register')->with('success', 'Register berhasil, silahkan login');
    }
}
