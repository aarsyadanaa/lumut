<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard'); // Halaman admin
    });
    Route::resource('posts', PostController::class);
    Route::resource('accounts', AccountController::class);
});

// Rute untuk author
Route::middleware(['auth', 'role:author'])->group(function () {
    Route::get('/author', function () {
        return view('author.dashboard'); // Halaman author
    });

    Route::resource('posts', PostController::class);
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

