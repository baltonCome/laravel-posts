<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class PostCommentController extends Controller{

    public function __construct(){

        $this->middleware(['auth']);
    }

    public function index(Post $post){

        $comments = $post->comments()->orderBy('created_at', 'desc')->with(['user'])->paginate(20);

        return view('posts.comments.index', [
            'post' =>$post,
            'comments' =>$comments 
        ]);
    }
    
    public function store(Post $post, Request $request){

        $this->validate($request, [
            'body' => 'required'
        ]);

        $post -> comments() -> create([
            'user_id' => $request -> user() -> id,
            'body' => $request -> body
        ]);

        return back();
    } 

    public function destroy(Post $post, Request $request){

        $this->authorize('delete', $post);
        $request->user()->comments()->where('post_id', $post->id)->delete();

        return back();
    }
}
