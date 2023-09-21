<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserContoller::class);
Route::resource('product',ProductController::class);
