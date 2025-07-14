<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

// Chat Bot Route
Route::post('/chat', [ChatController::class, 'send']);

// Middleware Route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
