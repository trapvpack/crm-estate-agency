<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'authorization'])->name('authorization');
Route::get('/home', [\App\Http\Controllers\IndexController::class, 'home'])->name('home');
Route::get('/clients', [\App\Http\Controllers\IndexController::class, 'clients'])->name('clients');
