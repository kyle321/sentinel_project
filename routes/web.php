<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'visitor'], function(){
    Route::get('/register','RegisterController@register');
    Route::post('/register','RegisterController@postRegister');
    Route::get('/login','LoginController@login');
    Route::post('/login','LoginController@postLogin');
    Route::post('/logout','LoginController@logout');
});

Route::get('/home','HomeController@home');
Route::get('/tasks','AdminController@tasks')->middleware('admin');
