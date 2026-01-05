<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect'],
    ], function () {
        Route::middleware('auth')->prefix('admin')->group(function () {
            Route::get('dashboard', fn () => view('dashboard'))->name('dashboard');
            Route::get('logout', [AuthController::class, 'logout'])->name('logout');

            Route::resource('user', \App\Http\Controllers\UserController::class);
            Route::resource('role', \App\Http\Controllers\RoleController::class);

            Route::resource('product', \App\Http\Controllers\ProductController::class);

            Route::resource('category', \App\Http\Controllers\CategoryController::class);
            Route::patch('category/{id}/status', [\App\Http\Controllers\CategoryController::class, 'updateStatus'])->name('category.update-status');
            Route::patch('category/{id}/sort', [\App\Http\Controllers\CategoryController::class, 'updateSort'])->name('category.update-sort');

            Route::resource('sub-category', \App\Http\Controllers\SubCategoryController::class);
            Route::patch('sub-category/{id}/status', [\App\Http\Controllers\SubCategoryController::class, 'updateStatus'])->name('sub-category.update-status');
            Route::patch('sub-category/{id}/sort', [\App\Http\Controllers\SubCategoryController::class, 'updateSort'])->name('sub-category.update-sort');

            Route::resource('product-brand', \App\Http\Controllers\ProductBrandController::class);
            Route::patch('product-brand/{id}/status', [\App\Http\Controllers\ProductBrandController::class, 'updateStatus'])->name('product-brand.update-status');
            Route::patch('product-brand/{id}/sort', [\App\Http\Controllers\ProductBrandController::class, 'updateSort'])->name('product-brand.update-sort');
        });
    });
