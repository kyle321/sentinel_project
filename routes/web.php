<?php

Route::get('/', 'HomeController@welcome');

Route::group(['middleware'=>'visitor'], function(){
    Route::get('/register','RegisterController@register');
    Route::post('/register','RegisterController@postRegister');
    Route::get('/login','LoginController@login');
    Route::post('/login','LoginController@postLogin');

});
Route::get('/logout','LoginController@logout');

Route::get('/home','HomeController@home')->middleware('user');
Route::get('/tasks','AdminController@tasks')->middleware('admin');
Route::group(['middleware'=>['admin','author']], function(){
    Route::get('/author','AuthorController@index');

});
Route::get('/activate/{email}/{activationCode}','ActivationController@activate');
Route::get('/forgot-password','ForgotPassword@forgot');
Route::post('/forgot-password','ForgotPassword@postForgotPassword');
Route::get('/reset/{email}/{resetCode}','ForgotPassword@passwordReset');
Route::post('/reset/{email}/{resetCode}','ForgotPassword@postPasswordReset');
