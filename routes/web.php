<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Event\YourEventController;
use App\Http\Controllers\Homepage\HomepageController;

// =============== Auth ===============
// ===== Register =====
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/store-register', [RegisterController::class, 'store'])->name('store-register');
// ===== Login =====
Route::get('/login', [LoginController::class, 'index'])->name('login');



// =============== HomePage ===============
Route::get('/', [HomepageController::class, 'index'])->name('homepage');



// =============== Admin Menu ===============
// ===== Dashboard =====
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// ===== Event =====
Route::get('/event', [EventController::class, 'index'])->name('event');
// ===== Your Event =====
Route::get('/your-event', [YourEventController::class, 'index'])->name('your-event');
