<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Event\EventController;
use Illuminate\Support\Facades\Route;


// =============== Menu =============== 

// ===== Dashboard =====
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// ===== Event =====
Route::get('/event', [EventController::class, 'index'])->name('event');
