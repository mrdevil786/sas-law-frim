<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilesController;

// Guest routes
Route::prefix('admin')->name('admin.')->middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('view.login');
    Route::post('/login', [AuthController::class, 'login'])->name('submit.login');
});

// Authenticated admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'web', 'checkAdminStatus'])->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');

    // Blogs Route
    Route::prefix('blogs')->name('blogs.')->controller(BlogsController::class)->group(function () {

        // Routes for admins
        Route::middleware('admin')->group(function () {
            Route::get('create', 'create')->name('create');
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::post('store', 'store')->name('store');
        });

        // Routes for managers
        Route::middleware('manager')->group(function () {
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

        // Routes for members
        Route::middleware('member')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });
    });

    // User management routes
    Route::prefix('users')->name('users.')->controller(UsersController::class)->group(function () {

        // Routes for admins
        Route::middleware('admin')->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::post('create', 'create')->name('create');
        });

        // Routes for managers
        Route::middleware('manager')->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

        // Routes for members
        Route::middleware('member')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });
    });

    // Profile routes
    Route::prefix('profile')->name('profile.')->controller(ProfilesController::class)->group(function () {

        // Routes for members
        Route::middleware('member')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
            Route::post('update', 'updateProfile')->name('update');
            Route::post('update-password', 'updatePassword')->name('update.password');
        });
    });
});
