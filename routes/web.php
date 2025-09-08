<?php

use App\Http\Controllers\Event\JoinedEventController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Event\YourEventController;
use App\Http\Controllers\Homepage\HomepageController;

// =============== Auth ===============
// ===== Register =====
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/store-register', [RegisterController::class, 'store'])->name('store-register');
// ===== Login =====
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/store-login', [LoginController::class, 'login'])->name('store-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// =============== HomePage ===============
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/detail/{event}', [HomepageController::class, 'detail'])->name('homepage.detail');


// =============== Admin Menu ===============
// ===== Dashboard =====
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// ===== Event =====
Route::get('/event', [EventController::class, 'index'])->name('event')->middleware('auth');
// ===== Your Event =====
Route::get('/your-event', [YourEventController::class, 'index'])->name('your-event')->middleware('auth');
Route::get('/your-event/create', [YourEventController::class, 'create'])->name('your-event.create')->middleware('auth');
Route::post('/your-event', [YourEventController::class, 'store'])->name('your-event.store')->middleware('auth');
Route::get('/your-event/{event}', [YourEventController::class, 'show'])->name('your-event.show')->middleware(['auth', 'can:view,event']);
Route::get('/your-event/{event}/edit', [YourEventController::class, 'edit'])->name('your-event.edit')->middleware(['auth', 'can:update,event']);
Route::put('/your-event/{event}', [YourEventController::class, 'update'])->name('your-event.update')->middleware(['auth', 'can:update,event']);
Route::delete('/your-event/{event}', [YourEventController::class, 'destroy'])->name('your-event.destroy')->middleware(['auth', 'can:delete,event']);

// ===== Profile =====
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password')->middleware('auth');
Route::delete('/profile/delete-account', [ProfileController::class, 'deleteAccount'])->name('profile.delete-account')->middleware('auth');
// Route::get('/joined', [JoinedEventController::class, 'index'])->name('joined')->middleware('auth');
