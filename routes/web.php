<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;

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
    return view('welcome');
});

Route::get('/profiles/create', [ProfileController::class, 'create']);
Route::post('/profiles', [ProfileController::class, 'store']);
Route::get('/posts/{post}', [ProfileController::class, 'show']);
Route::get('/profiles/{user}',[ProfileController::class,'index']);
Route::get('/profiles/{profile}',[ProfileController::class,'index']);
Route::post('/users/{user}/follow', 'FollowController@follow');
Route::post('/users/{user}/follow', 'FollowController@unfollow');