<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'About');
Route::view('/Dashboard', 'DashBoard');
