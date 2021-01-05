<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\PostLike;
use App\PostDislike;

use Input;
use Auth;

class PostController extends Controller
{
    public function showList(){
        $posts = Post::all();
        foreach ($posts as $post) {
            foreach ($post->likes as $like) {
                if($like['id'] == Auth::id()){
                    $post->liked = true;
                }else{
                    $post->liked = false;
                }
            }
        }
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

    public function likePost(Request $request)
    {
        $res = PostLike::create($request->all());
        return $res;
    }

    public function dislikePost(Request $request)
    {
        $res = PostLike::where($request->all())->delete();
        return $res;
    }

}
