<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;


class RegisterController extends Controller
{
    public function register()
    {
    	return view('authenticate.register');
    }
    public function postRegister(Request $request)
    {
    	$this->validate($request,[
    		'email'=>'required|email|unique:users',
    		'first_name'=>'required|min:4',
    		'last_name'=>'required',
    		'password'=>'required|min:4']);
    	$user=Sentinel::registerAndActivate($request->all());
		$role=Sentinel::findRoleBySlug('manager');
		$role->users()->attach($user);
    	return $user;
    }
}
