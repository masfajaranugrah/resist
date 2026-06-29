<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistrationController::class, 'welcome'])->name('welcome');

Route::get('/register/step1', [RegistrationController::class, 'step1'])->name('register.step1');
Route::post('/register/step1', [RegistrationController::class, 'storeStep1'])->name('register.step1.store');

Route::get('/register/step2', [RegistrationController::class, 'step2'])->name('register.step2');
Route::post('/register/store', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/register/success', [RegistrationController::class, 'success'])->name('register.success');

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/export', [AdminController::class, 'exportCsv'])->name('admin.export');
    Route::get('/admin/export-pdf', [AdminController::class, 'exportPdf'])->name('admin.export.pdf');
});
