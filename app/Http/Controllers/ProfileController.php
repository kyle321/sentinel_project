<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Sentinel;
use App\User;

class ProfileController extends Controller
{
    public function profile()
    {

    	return view('profile.profile');
    }
    public function postProfile(Request $request, $id)
    {
    	$this->validate($request, [
    		'first_name'=>'required|min:4',
    		'last_name'=>'required|min:4',
    		'email'=>'required|email',
    		'avatar'=>'required|image|mimes:png,jpg,jpeg'
    		]);
    	
    	if ($request->hasFile('avatar')) {
            $user=User::find($id);
            $imageName = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('images/avatar'), $imageName);
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->email=$request->email;
            $user->avatar=$imageName;
            $user->save();
            return redirect()->back();
        }else
        {
            return "not working";
        }
    }
}
