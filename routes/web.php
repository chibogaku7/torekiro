<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SampleController;

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


Route::get('/',[LoginController::class,'home']);

Route::get('/login',[LoginController::class,'login']);

Route::post('/login',[LoginController::class,'login']);

Route::get('/user/register',[UserController::class,'register']);

Route::get('/sample',[SampleController::class, 'index']);
