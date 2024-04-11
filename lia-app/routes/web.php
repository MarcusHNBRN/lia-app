<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyGalleryController;
use App\Http\Controllers\StudentGalleryController;




Route::get('/', function () {
    return view('index');
});

Route::post('/registration', [StudentController::class, 'create'])->name('registration.submit');
Route::post('/registration', [CompanyController::class, 'create'])->name('registration.submit');
Route::post('/login', LoginController::class)->name('login.submit');
Route::get('dashboard', DashboardController::class)->middleware('auth')->name('dashboard');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::view('/', 'index')->name('login');
Route::view('/studentGallery', 'studentGallery')->name('student');
Route::view('/companyGallery', 'companyGallery')->name('company');


Route::get('/registration', function () {
    return view('registration');
});

/** Routes for galleries and individual students etc. **/
//Route::view('/studentGallery', 'gallery.studentGallery')->name('student');
Route::get('/studentGallery', [StudentGalleryController::class, 'index'])->name('student.gallery');
Route::get('/student/{studentId}', [StudentGalleryController::class, 'show'])->name('student.detail');

Route::get('/companyGallery', [CompanyGalleryController::class, 'index'])->name('company.gallery');
Route::get('/company/{companyId}', [CompanyGalleryController::class, 'show'])->name('company.detail');

