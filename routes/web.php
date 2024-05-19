<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->name('dashboard.')->group(function () {
        Route::get('/home', [DashboardController::class, 'index'])->name('home');
    });

    Route::controller(UserController::class)->name('user.')->group(function () {
        Route::get('/menu/daftar-user', [UserController::class, 'index'])->name('index');
    });
});

