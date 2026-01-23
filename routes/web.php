<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::middleware('auth')->group(function () {
    Route::post('/jobs/{job}/apply', [JobController::class, 'apply'])->name('jobs.apply');
    Route::post('/jobs/{job}/save', [JobController::class, 'save'])->name('jobs.save');

    // Profile Routes
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('password.update');
    Route::get('/profile/applications', [\App\Http\Controllers\ProfileController::class, 'applications'])->name('profile.applications');
    Route::get('/profile/saved', [\App\Http\Controllers\ProfileController::class, 'saved'])->name('profile.saved');
    Route::get('/profile/my-jobs', [\App\Http\Controllers\ProfileController::class, 'myJobs'])->name('profile.my-jobs');
    Route::get('/profile/jobs/{job}/candidates', [\App\Http\Controllers\ProfileController::class, 'candidates'])->name('profile.candidates');
    Route::patch('/profile/jobs/{job}/candidates/{applicant}', [\App\Http\Controllers\ProfileController::class, 'updateApplicationStatus'])->name('profile.candidates.update');
});

Route::resource('jobs', JobController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
