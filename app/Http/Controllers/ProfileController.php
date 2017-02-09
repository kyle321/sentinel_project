<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Sentinel;

class ProfileController extends Controller
{
    public function profile()
    {

    	return view('profile.profile');
    }
    public function postProfile(Request $request)
    {
    	return redirect()->back();
    }
}
