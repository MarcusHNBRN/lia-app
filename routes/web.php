<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('index');
});

route::post('login', LoginController::class)->name('login');
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::view('/', 'index')->name('index');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
