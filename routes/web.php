<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'authorization'])->name('authorization');
Route::get('/home', [\App\Http\Controllers\IndexController::class, 'home'])->name('home');
