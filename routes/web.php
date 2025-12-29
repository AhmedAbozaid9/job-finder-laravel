<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::resource('jobs', JobController::class)->only(['index', 'show']);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');

// Auth routes
Route::get('/login', [Auth::class, 'showLogin'])->name('login');
Route::get('/register', [Auth::class, 'showRegister'])->name('register');
