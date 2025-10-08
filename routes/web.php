<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;

// Login & Logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Protected pages
Route::get('/admin', function () {
    return view('Pages.Admin.dashboard'); 
})->middleware('auth')->name('admin.dashboard');

Route::get('/home', function () {
    return view('Pages.User.home'); 
})->middleware('auth')->name('home');




// Forget Password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetForm'])->name('forget.password.post');

// Reset Password
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetForm'])->name('reset.password.post');

