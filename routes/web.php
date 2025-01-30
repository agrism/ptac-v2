<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class)->name('home');
Route::get('/register/{register}', \App\Http\Controllers\Registers\RegisterItemsController::class)->name('register.items');
Route::get('/register/{register}/details/{id}', \App\Http\Controllers\Registers\RegisterItemDetailsController::class)->name('register.items.details');
