<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('appearance.login');
});
Route::get('/dashboard', function () {
    return view('appearance.beranda');
});
