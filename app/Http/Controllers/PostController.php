<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function showList(){
        $posts = Post::all();
        return view('post.list')->with('posts', $posts);
    }

    public function createPostGet(){
        return view('post.create')->with('posts');
    }

    public function createPost(Request $request){
        $this->validate($request, array(
            'title'     =>  'required',
            'content'   =>  'required',
        ));
        
        Post::create(array(
            'title'     =>  $request->input('title'),
            'content'   =>  $request->input('content'),
        ));
        
        return redirect('post/list');
    }

}
