<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
    	return view('authenticate.login');
    }
    public function postLogin(Request $request)
    {
    	$this->validate($request,['email'=>'required',
    		'password'=>'required']);
    	Sentinel::authenticate($request->all());
    	return redirect('/home');
    }
    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/login');
    }
}
