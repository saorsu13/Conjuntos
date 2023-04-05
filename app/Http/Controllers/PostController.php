<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('Post.index');
    }
    public function createPost()
    {
        return view('Post.createPost');
    }
    public function addPost(Request $request)
    {
        $post=new Location();
        $post->code=$request->codigo;
        $post->name=$request->nombre;
        $post->description=$request->options;
       
    }
}
