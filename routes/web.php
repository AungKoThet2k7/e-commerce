<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::patch('category/{id}/status', [\App\Http\Controllers\CategoryController::class, 'updateStatus'])->name('category.update-status');
    Route::resource('sub-category', \App\Http\Controllers\SubCategoryController::class);
    Route::patch('sub-category/{id}/status', [\App\Http\Controllers\SubCategoryController::class, 'updateStatus'])->name('sub-category.update-status');
});
