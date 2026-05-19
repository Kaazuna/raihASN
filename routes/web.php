<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/tryout', function () {
    return view('tryout.tryout');
})->name('tryout');
Route::get('/tryout/starts', function () {
    return view('tryout.starts');
})->name('starts');
Route::get('/tryout/prepare', function () {
    return view('tryout.prepare');
})->name('prepare');
Route::get('/loginASN', function () {
    return view('auth.loginASN');
})->name('login');
Route::get('/signupASN', function () {
    return view('auth.signupASN');
})->name('signup');
Route::get('/admin/tryout', function () {
    return view('admin.magtryout');
})->name('admintryout');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboardadmin');
})->name('dashadmin');
Route::get('/admin/banksoal', function () {
    return view('admin.manajemensoal');
})->name('manajemensoal');
Route::get('/admin/usermanajemen', function () {
    return view('admin.manuser');
})->name('manajemenuser');
Route::get('/admin/tryout/create', function () {
    return view('admin.tambahsoal');
});