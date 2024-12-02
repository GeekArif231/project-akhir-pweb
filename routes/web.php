<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

// Route::middleware(['auth', 'admin'])->get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Route::middleware(['auth', 'customer'])->get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');


// Authentication routes
Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
// });


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth', 'admin'])->resource('gedung', GedungController::class);

Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');
    Route::post('/penyewaan', [PenyewaanController::class, 'store']);
});


