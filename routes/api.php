<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\V1\TicketController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class,'logout']);



Route::middleware('auth:sanctum')->apiResource('/tickets', TicketController::class);
