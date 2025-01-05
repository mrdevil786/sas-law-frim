<?php

use App\Http\Controllers\Admin\AttorneyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilesController;
use App\Http\Controllers\Admin\CasesController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InternshipController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ReviewController;

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

    // Blogs Route
    Route::prefix('medias')->name('medias.')->controller(MediaController::class)->group(function () {

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

    // Attorneys Routes
    Route::name('attorneys.')
        ->prefix('attorneys')
        ->middleware('admin')
        ->controller(AttorneyController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('attorneys.')
        ->prefix('attorneys')
        ->middleware('manager')
        ->controller(AttorneyController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('attorneys.')
        ->prefix('attorneys')
        ->middleware('member')
        ->controller(AttorneyController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });

    // Clients Routes
    Route::name('clients.')
        ->prefix('clients')
        ->middleware('admin')
        ->controller(ClientController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('clients.')
        ->prefix('clients')
        ->middleware('manager')
        ->controller(ClientController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('clients.')
        ->prefix('clients')
        ->middleware('member')
        ->controller(ClientController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('show/{id}', 'show')->name('show');
        });

    // Case Studies Routes
    Route::name('cases.')
        ->prefix('cases')
        ->middleware('admin')
        ->controller(CaseStudyController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('cases.')
        ->prefix('cases')
        ->middleware('manager')
        ->controller(CaseStudyController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('cases.')
        ->prefix('cases')
        ->middleware('member')
        ->controller(CaseStudyController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });

    // Review Routes
    Route::name('reviews.')
        ->prefix('reviews')
        ->middleware('admin')
        ->controller(ReviewController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('reviews.')
        ->prefix('reviews')
        ->middleware('manager')
        ->controller(ReviewController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('reviews.')
        ->prefix('reviews')
        ->middleware('member')
        ->controller(ReviewController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });

    // Gallery Route
    Route::name('gallerys.')
        ->prefix('gallerys')
        ->middleware('admin')
        ->controller(GalleryController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('gallerys.')
        ->prefix('gallerys')
        ->middleware('manager')
        ->controller(GalleryController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('gallerys.')
        ->prefix('gallerys')
        ->middleware('member')
        ->controller(GalleryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });

    // Internships Route
    Route::name('internships.')
        ->prefix('internships')
        ->middleware('admin')
        ->controller(InternshipController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('internships.')
        ->prefix('internships')
        ->middleware('manager')
        ->controller(InternshipController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('internships.')
        ->prefix('internships')
        ->middleware('member')
        ->controller(InternshipController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
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
