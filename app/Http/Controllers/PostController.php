<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Sentinel;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:8',
            'post'=>'required|min:10',
            'slug'=>'required|max:20'
            ]);
        $post=new Post;
        $post->title=$request->title;
        $post->post=$request->post;
        $post->slug=$request->slug;
        $post->save();
       
        Session::flash('success','post created successfully');
        return redirect()->back();
    }
    public function show($id)
    {
        $posts=Post::find($id);
        return view('post.show')->with('posts',$posts);
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
