<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;


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
    	$user=Sentinel::register($request->all());
		$activation=Activation::create($user);
		$role=Sentinel::findRoleBySlug('user');
		$role->users()->attach($user);
		$this->sendEmail($user, $activation->code);
    	return redirect('/home');
    }
	private function sendEmail($user, $code)
	{
		Mail::send('emails.activation',[
			'user'=>$user,
			'code'=>$code
		], function($message) use ($user){
			$message->to($user->email);
			$message->subject("Hello $user->first_name, activate your account");
		});
	}
}
