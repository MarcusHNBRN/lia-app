<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;



Route::get('/', function () {
    return view('index');
});

Route::post('/login', LoginController::class)->name('login.submit');
Route::get('dashboard', DashboardController::class)->middleware('auth')->name('dashboard');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::view('/', 'index')->name('login');
