<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.login');
});
//Login
Route::get('login', 'Login\LoginController@getLogin');
Route::post('login', 'Login\LoginController@postLogin');

//Logout
Route::get('logout', 'Login\LoginController@getLogout');

//Register
Route::get('register', 'Login\RegisterController@getRegister');
Route::post('post_register', 'Login\RegisterController@postRegister');

//edit profile
Route::get('edit', 'Home\EditProfileController@getEdit');


Route::group(['middleware' => 'checkuser', 'prefix' => 'home', 'namespace' => 'admin'], function() {
    Route::get('/', function(){
        return view('layouts.home');
    });
});
