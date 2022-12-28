<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{ var $search,$category;
    function index(){

        if(request('search')!==null){
            $search=request('search');
        }
        else{
           $search='';
        }

        if(request('category')!==null){
            $category=request('category');
        }
        else{
           $category='%';
        }

        return view('welcome',
        ["posts"=>Post::latest()->filters(['search'=>$search,'category'=>$category])->get(),"categories"=>Category::all()]);
    }
    function show(Post $post){
        return view('post',
        ["post"=>$post,"categories"=>Category::all()]);
    }


}
