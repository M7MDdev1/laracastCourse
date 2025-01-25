<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','Home');
Route::view('/Contact','Contact');

Route::resource('jobs', JobController::class);
Route::resource('register', UserController::class);
Route::resource('login', sessionController::class);
Route::post('/logout',[sessionController::class,'destroy']);
