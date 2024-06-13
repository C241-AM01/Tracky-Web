<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth routes
Route::get('/auth/signup', [AuthController::class, 'showSignupForm'])->name('auth.signup.form');
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('auth.login.form');
Route::post('/auth/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
