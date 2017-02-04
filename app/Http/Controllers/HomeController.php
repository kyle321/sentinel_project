<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function home()
    {
    	return view('authenticate.home');
    }

    public function welcome()
    {
        $posts=Post::all();
        return view('welcome')->with('posts',$posts);
    }
}

