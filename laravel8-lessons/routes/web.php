<?php
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',["posts"=>Post::all()]);
});
Route::get('post/{post:slug}', function (Post $post) {
    return view('post',["post"=> $post]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('post',["post"=>$category->posts]);
});
