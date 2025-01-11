<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Student\StudentAuthController;

Route::get('/',[StudentAuthController::class, 'loginPage'])->name('student.login.page');

Route::prefix('admin/')->group(function(){
    Route::get('',[AdminAuthController::class, 'loginPage'])->name('admin.login.page');
    Route::get('login',[AdminAuthController::class, 'loginPage'])->name('admin.login.page');
    Route::post('course',[AdminAuthController::class, 'loginAction'])->name('admin.login');
});

Route::prefix('student/')->group(function(){
    Route::get('',[StudentAuthController::class, 'loginPage'])->name('student.login.page');
    Route::get('login',[StudentAuthController::class, 'loginPage'])->name('student.login.page');
    Route::post('login',[StudentAuthController::class, 'loginAction'])->name('student.login');
});