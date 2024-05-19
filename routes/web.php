<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/menu/daftar-user', function () {
    return view('pages.user.index');
});

Route::get('/menu/daftar-pegawai', function () {
    return view('pages.pegawai.index');
});

Route::get('/menu/daftar-supplier', function () {
    return view('pages.supplier.index');
});

Route::get('/tambah-supplier', function () {
    return view('pages.supplier.create');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

