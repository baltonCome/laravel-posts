<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    
    /*public function __construct(){

        $this->middleware(['auth']);
    }*/

    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(20);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request, Post $post){

        if($post->likedBy($request -> user())){
            return \response(null, 409);
        }

        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post){

        $this->authorize('delete', $post);
        $post->delete();

        return back();
    }
}
