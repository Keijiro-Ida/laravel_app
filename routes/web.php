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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');

Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');

Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');

Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

