<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComController;
use App\Http\Controllers\LoginController;
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

Route::get('/v_post',[PostController::class,'index']);

Route::get('/get_post/{id}',[PostController::class,'show']);

Route::put('/updatepost/{id}',[PostController::class,'index']);

Route::post('/register',[RegisterController::class,'store']);

Route::post('/login',[LoginController::class,'index']);

Route::post('/post',[PostController::class,'store']);

Route::post('/com',[ComController::class,'store']);

Route::get('/profile_show/{id}',[ProfileController::class,'show']);

Route::put('/profile_update/{id}',[ProfileController::class,'update']);

Route::delete('/deleteprofile/{id}',[ProfileController::class,'destroy']);