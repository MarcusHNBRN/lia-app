<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('index');
});

Route::post('/registration', [UserController::class, 'create'])->name('registration.submit');
Route::post('/login', LoginController::class)->name('login.submit');
Route::get('dashboard', DashboardController::class)->middleware('auth')->name('dashboard');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::view('/', 'index')->name('login');

Route::get('/registration', function () {
    return view('registration');
});

/** Routes for galleries and individual students etc. **/
Route::view('/studentGallery', 'gallery.studentGallery')->name('student');
Route::view('/companyGallery', 'gallery.companyGallery')->name('company');
Route::get('/company/{companyId}', 'gallery.companyDetail')->name('company.detail');