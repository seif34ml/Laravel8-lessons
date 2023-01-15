<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function addComment(Post $post){
        $attributes=request()->validate([

            'comment'=>'required'

        ]);
        $attributes['user_id']=auth()->user()->id;
        $attributes['post_slug']=$post->slug;
        Comment::create($attributes);
       return back();

       return back()->withErrors("comment",'cannot be empty');
    }

}
