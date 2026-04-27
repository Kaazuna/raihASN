<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/tryout', function () {
    return view('tryout.tryout');
});
Route::get('/tryout/starts', function () {
    return view('tryout.starts');
});
Route::get('/tryout/prepare', function () {
    return view('tryout.prepare');
});