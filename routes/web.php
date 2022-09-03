<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\{
    ChurchController,
    DashboardController,
};

use App\Http\Controllers\Auth\LoginController;


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('casas-de-oracao', [ChurchController::class, 'index'])->name('admin.church.index');
    Route::get('criar/casa-de-oracao', [ChurchController::class, 'create'])->name('admin.church.create');
    Route::post('criar/casa-de-oracao', [ChurchController::class, 'store'])->name('admin.church.store');

});

