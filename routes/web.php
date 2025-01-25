<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/','Home');

Route::resource('jobs', JobController::class);

Route::view('/Contact','Contact');

