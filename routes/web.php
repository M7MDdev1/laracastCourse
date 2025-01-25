<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','Home');

Route::resource('jobs', JobController::class);

Route::view('/Contact','Contact');

Route::get('/register', [UserController::class, 'create']);

Route::post('/register',[UserController::class,'store']);
Route::get('/login', [sessionController::class, 'index']);
Route::post('/login',[sessionController::class,'store']);
