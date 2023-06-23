<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\Type_UserController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TutorialController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/profiles/create', [ProfileController::class, 'create']);
Route::get('/profiles/{profile}', [ProfileController::class, 'show']);
Route::post('/profiles', [ProfileController::class, 'store']);
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit']);
Route::put('/profiles/{profile}', [ProfileController::class, 'update']);
Route::get('/follows/{user}', [FollowController::class, 'index']);
Route::get('/follows', [FollowController::class, 'show']);
Route::post('/follows', [FollowController::class, 'store']);
Route::controller(FollowController::class)->middleware(['auth'])->group(function(){
    Route::get('/users/{user}/follow','follow')->name('follow');
    Route::get('/users/{user}/unfollow','unfollow')->name('unfollow');
});
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos',[TodoController::class, 'store']);
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);
Route::delete('/todos/{todo}', [TodoController::class,'delete']);
Route::get('/types/create', [TypeController::class, 'create']);
Route::get('/types', [TypeController::class, 'index']);
Route::post('/types', [TypeController::class, 'store']);
Route::get('/types/{type}', [TypeController::class, 'show']);
Route::get('/types/{type}/edit', [TypeController::class, 'edit']);
Route::put('/types/{type}', [TypeController::class, 'update']);
Route::delete('/types/{type}', [TypeController::class,'delete']);
Route::get('/type_users', [Type_UserController::class, 'index']);
Route::get('/type_users/{type_user}', [Type_UserController::class, 'show']);
Route::get('/type_users/{type_user}/nice', [Type_UserController::class, 'nice'])->name('nice');
Route::get('/type_users/{type_user}/unnice', [Type_UserController::class, 'unnice'])->name('unnice');
Route::get('/type_users/{type_user}/edit', [Type_UserController::class, 'edit']);
Route::put('/type_users/{type}', [Type_UserController::class, 'update']);
Route::get('/calenders/{calender}', [CalenderController::class, 'index']);
Route::get('/plans/create', [PlanController::class, 'create']);
Route::get('/plans/{plan}', [PlanController::class, 'show']);
Route::post('/plans', [PlanController::class, 'store']);
Route::get('/plans/{plan}/edit', [PlanController::class, 'edit']);
Route::put('/plans/{plan}', [PlanController::class, 'update']);
Route::delete('/plans/{plan}', [PlanController::class,'delete']);
Route::get('/steps/create', [StepController::class, 'create']);
Route::post('/steps', [StepController::class, 'store']);
Route::get('/steps/{step}/edit', [StepController::class, 'edit']);
Route::put('/steps/{step}', [StepController::class, 'update']);
Route::delete('/steps/{step}', [planController::class,'delete']);
Route::get('/tutorials/create', [TutorialController::class, 'create']);
Route::post('/tutorials', [TutorialController::class, 'store']);
Route::get('/tutorials/{tutorial}/edit', [TutorialController::class, 'edit']);
Route::put('/tutorials/{tutorial}', [TutorialController::class, 'update']);
Route::delete('/tutorials/{tutorial}', [TutorialController::class,'delete']);