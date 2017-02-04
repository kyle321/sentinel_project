<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Illuminate\Http\Request;
use Sentinel;

use Catalyst\Sentinel\Checkpoints\ThrottlingException;
use Session;
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
        try{
            if(Sentinel::authenticate($request->all())){
                Session::flash('success','thanks for logging in****');
                return redirect('/home');
            }else{
                Session::flash('error','check your credentials and try again');
                return redirect()->back();
            }

        }catch(ThrottlingException $e){
            $delay=$e->getDelay();
            return redirect()->back()->with(['error'=>"you are banned for $delay seconds"]);
        }catch(NotActivatedException $e){
            return redirect()->back()->with(['error'=>'your account is not activated']);


        }



    }
    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/login');
    }
}
