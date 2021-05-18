<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\PriceController;
use App\Http\Controllers\Api\CommentController;
use App\Models\Post;
use Laravelista\Comments\Comment;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::get('price',[PriceController::class, 'index'])->name('price');
Route::get('/comments/{post}',[CommentController::class,'showComment'])->name('show-comment');
Route::get('/posts/{post}/comments', function (Post $post){
    return $post->comments;
});
Route::post('/posts/{post}/comments', function (Request $request, Post $post){
    $comment = new Comment;
    $comment->commenter()->associate(auth()->user());
    $comment->commentable()->associate($post);
    $comment->comment = $request->comment;
    $comment->guest_name = $request->guest_name;
    $comment->guest_email = 'test@test.ru';
    $comment->approved = true;
    $comment->save();

    return $comment;
});
