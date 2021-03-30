<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class RegisterController extends Controller
{
    
    public function getRegister()
    {
        if (Auth::check()) {
            return redirect('home');
        }
        else{
            return view('layouts.register');
        }
    }

    public function postRegister(Request $request)
    {
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect('login');
    }
}
