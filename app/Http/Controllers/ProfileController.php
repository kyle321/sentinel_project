<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Sentinel;
use App\User;
use Image;
use Storage;

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
    		]);
            $user=User::find($id);
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->email=$request->email;
    	
    	if ($request->hasFile('avatar')) {
            $image=$request->file('avatar');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $location=$image->move(public_path('images/avatar'),$imageName);
            $oldimage=$user->avatar;
            Storage::delete($oldimage);
            $user->avatar=$imageName;
        }
            
            $user->save();
            return redirect()->back();
    }
}
