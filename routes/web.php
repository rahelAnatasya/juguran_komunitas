<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


// AUTH
Route::post('/store-register', [RegisterController::class, 'store'])->name('store-register');
