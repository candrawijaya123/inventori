<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Models\Supplier;
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
        Route::get('/menu/daftar-user/create', [UserController::class, 'create'])->name('create');
        Route::post('/menu/daftar-user/store', [UserController::class, 'store'])->name('store');
    });

    Route::controller(SupplierController::class)->name('supplier.')->group(function () {
        Route::get('/menu/daftar-supplier', [SupplierController::class, 'index'])->name('index');
        Route::get('/menu/daftar-supplier/create', [SupplierController::class, 'create'])->name('create');
        Route::post('/menu/daftar-supplier/store', [SupplierController::class, 'store'])->name('store');
    });

});

