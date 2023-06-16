<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\Type_UserController;
use App\Http\Controllers\TodoController;

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
Route::get('/profiles', [ProfileController::class, 'show']);
Route::post('/profiles', [ProfileController::class, 'store']);
Route::get('/profiles/user/{user}', [ProfileController::class, 'index']);
Route::get('/follows/user/{user}', [FollowController::class, 'followbutton']);
Route::post('/follows/user/{user}', [FollowController::class, 'followbutton']);
Route::get('/follows', [FollowController::class, 'show']);
Route::post('/follows', [FollowController::class, 'store']);
Route::controller(FollowController::class)->middleware(['auth'])->group(function(){
    Route::get('/users/{user}/follow','follow')->name('follow');
    Route::get('/users/{user}/unfollow','unfollow')->name('unfollow');
});
Route::get('/todos/create', [TodoController::class, 'create']);
Route::get('/todos',[TodoController::class, 'show']);
Route::get('/types/create', [TypeController::class, 'create']);
Route::get('/types', [TypeController::class, 'index']);
Route::post('/types', [TypeController::class, 'store']);
Route::get('/types/{type}', [TypeController::class, 'show']);