<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeddingController::class,"home"])->name("welcome");
Route::resource('wedding',WeddingController::class)->names('wedding');

Route::view('/about', 'About');
Route::view('/Dashboard', 'DashBoard');
Route::get('/Contact', function () {
    return view("Contact");
});
Route::resource('customer',CustomerController::class)->names('customer');
Route::get('/viewing', [CustomerController::class,'index'])->name('View');

