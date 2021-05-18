<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
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

Auth::routes();




/*Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');*/

Route::get('login/facebook', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('fblogin');
Route::get('login/facebook/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback'])->name('fbcallback');
Route::get('login/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('glogin');
Route::get('login/google/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback'])->name('gcallback');
Route::get('login/github', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('gitlogin');
Route::get('login/github/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback'])->name('gitcallback');
Route::resource('/admin/posts', PostController::class)->names('posts');
Route::get('/', function () {
    return view('layouts.main');
})->where('any', '.*');

Route::get('/{any}', function () {
    return view('layouts.main');
})->where('any', '.*');

