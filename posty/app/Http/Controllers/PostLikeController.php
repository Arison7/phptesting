<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostLikeController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function store(Post $post, Request $request){
        if(!$post->likedBy(auth()->user()));
            $post->likes()->create([
            'user_id' => auth()->id()
        ]);

        return back();
    }

    public function destroy(Post $post, Request $request){
        $request->user()->likes()->where('post_id', $post->id)->delete();
        return back();
    }

}
