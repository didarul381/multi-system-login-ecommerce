<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', fn() => view('welcome'));

// Show login form
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');

// Handle login form POST
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Protected routes - require authentication
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
