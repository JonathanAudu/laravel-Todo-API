<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController; 

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('Auth')->group(function () {
    Route::post('/login', LoginController::class)->middleware('guest');
    Route::post('/logout', LogoutController::class)->middleware('guest');
    Route::post('/register', RegisterController::class)->middleware('guest');
});
