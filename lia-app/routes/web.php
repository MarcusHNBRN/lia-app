<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CompanyGalleryController;
use App\Http\Controllers\StudentGalleryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\IntegrityController;
use App\Http\Controllers\ApplyForLiaController;



Route::get('/', function () {
    return view('index');
});
Route::get('/profile/student', [StudentProfileController::class, 'show'])->name('student.profile');
Route::get('/profile/company', [CompanyProfileController::class, 'show'])->name('company.profile');
Route::post('/registration/student', [StudentController::class, 'create'])->name('registration.student.submit');
Route::post('/registration/company', [CompanyController::class, 'create'])->name('registration.company.submit');
Route::post('/login', LoginController::class)->name('login.submit');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::view('/', 'index')->name('login');
Route::view('/studentGallery', 'studentGallery')->name('student');
Route::view('/companyGallery', 'companyGallery')->name('company');



Route::get('/registration', function () {
    return view('registration');
});

/** Routes for galleries and individual students etc. **/
Route::get('/studentGallery', [StudentGalleryController::class, 'index'])->name('student.gallery');
Route::get('/student/{studentId}', [StudentGalleryController::class, 'show'])->name('student.detail');

Route::get('/companyGallery', [CompanyGalleryController::class, 'index'])->name('company.gallery');
Route::get('/company/{companyId}', [CompanyGalleryController::class, 'show'])->name('company.detail');
Route::get('/applyForLia/{companyId}', [ApplyForLiaController::class, 'ApplyForLia'])->name('ApplyForLia');

/** Profiles */
Route::get('/profile/student/{id}', [StudentProfileController::class, 'show'])->name('student.profile');
Route::get('/profile/company/{id}', [CompanyProfileController::class, 'show'])->name('company.profile');
Route::get('/profile/student/{id}/edit', [StudentProfileController::class, 'edit'])->name('student.profile.edit');
Route::put('/profile/student/{id}/update', [StudentProfileController::class, 'update'])->name('student.profile.update');
Route::get('/profile/company/{id}/edit', [CompanyProfileController::class, 'edit'])->name('company.profile.edit');
Route::put('/profile/company/{id}/update', [CompanyProfileController::class, 'update'])->name('company.profile.update');

/** Dashboard */
Route::get('/dashboard/student', [DashboardController::class, 'studentDashboard'])->name('student_dashboard');
Route::get('/dashboard/company', [DashboardController::class, 'companyDashboard'])->name('company_dashboard');

/** Integrity / GDPR **/
Route::get('/nav/integrity', [IntegrityController::class, 'GDPR'])->name('integrity');
