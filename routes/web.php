<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Event\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



// AUTH
Route::post('/store-register', [RegisterController::class, 'store'])->name('store-register');



// =============== Menu ===============

// ===== Dashboard =====
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// ===== Event =====
Route::get('/event', [EventController::class, 'index'])->name('event');

