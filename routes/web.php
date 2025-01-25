<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class)->name('home');
Route::get('/register/{register}', \App\Http\Controllers\Registers\ShowController::class)->name('register.show');
