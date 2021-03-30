<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EditProfileController extends Controller
{
    public function getEdit()
    {
        if (Auth::check()) {
            return view('layouts_right.edit_profile');
        }else
        return view('layouts.login');
    }

    public function postEdit(Request $request)
    {
        $user = User::updateOrInsert([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'age'=>$request->age
            ]
        );
    }
}
