<?php

use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class, 'login']);

Route::get('/tickets', function(){
    return Ticket::all();
});