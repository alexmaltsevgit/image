<?php

use App\Http\Controllers\Admin\AddCategoryController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AddProductController;
use App\Http\Controllers\Admin\DeleteProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->middleware('auth:admin');

    Route::get('/add-product', [AddProductController::class, 'create'])
        ->middleware('auth:admin')
        ->name('add-product');

    Route::post('/add-product', [AddProductController::class, 'store'])
        ->middleware('auth:admin');

    Route::get('/add-category', [AddCategoryController::class, 'create'])
        ->middleware('auth:admin')
        ->name('add-category');

    Route::post('/add-category', [AddCategoryController::class, 'store'])
        ->middleware('auth:admin');

    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->middleware('guest:admin')
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware('guest:admin');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:admin')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:admin');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');
});
