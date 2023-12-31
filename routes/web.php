<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('backend.pages.dashboard.index');
});

Route::get('/login', function () {
    return view('backend.pages.login.login');
});

Route::get('/karyawan', function () {
    return view('backend.pages.template.index');
});

Route::get('/tambah-karyawan', function () {
    return view('backend.pages.template.create');
});

Route::get('/user-profile', function () {
    return view('backend.pages.login.user-profile');
});
