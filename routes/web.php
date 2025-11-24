<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Setelah login → tampil film dan kategori
Route::get('/category', [CategoryController::class, 'index'])->middleware('auth');

// Filter kategori
Route::get('/category/{category}', [CategoryController::class, 'byCategory'])->middleware('auth');
