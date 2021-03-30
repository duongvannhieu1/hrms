<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('home');
        }
        else{
            return view('layouts.login');
        }
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $credentials=$request->only('email','password', 'rememberme_token');
        if (Auth::attempt($credentials)) {
            return redirect('home');
        }
        else{
            return redirect()->back();
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function getForgot()
    {
        return view('layouts.forgot_password');
    }
}
