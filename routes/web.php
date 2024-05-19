<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/menu/daftar-user', function () {
    return view('pages.user.index');
});
