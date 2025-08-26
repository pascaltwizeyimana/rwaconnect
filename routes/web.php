<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\UploadController;

// Redirect root to home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Main app routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/inbox', [ChatController::class, 'index'])->name('inbox');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
Route::get('/post', [UploadController::class, 'index'])->name('post');

// Posts
Route::middleware('auth')->group(function () {
    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
});
use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'index'])->name('search');


// In web.php
Route::get('/post', function () {
    return view('post');
})->name('post');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/search', [SearchController::class, 'index'])->name('search');
