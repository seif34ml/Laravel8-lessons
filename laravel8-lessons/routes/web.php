<?php
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;


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

Route::get('/', [RegisterController::class,'indexLogin'])->middleware(['guest']);
Route::post('/', [RegisterController::class,'login'])->middleware(['guest']);
Route::get('/register',[RegisterController::class,'index'])->middleware(['guest']);
Route::post('/register',[RegisterController::class,'register'])->middleware(['guest']);
Route::get('/logout', [RegisterController::class,'logout'])->middleware(['auth']);
Route::get('/posts', [PostController::class,'index'])->middleware(['auth']);
Route::get('post/{post:slug}', [PostController::class,'show'])->middleware(['auth']);
Route::post('post/{post:slug}/comments', [CommentController::class,'addComment']);
Route::get('/categories/{category}',  [PostController::class,'showAll'])->middleware(['auth']);



