<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){

     $posts=Post::latest();



        return view('welcome',
        ["posts"=>$posts->filters(request(['search']))->get(),"categories"=>Category::all()]);
    }
}
