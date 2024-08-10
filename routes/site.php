<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BasicController;

Route::get('/', [BasicController::class, 'dashboard'])->name('site.dashboard');
Route::get('/services', [BasicController::class, 'services'])->name('site.services');
Route::get('/about', [BasicController::class, 'about'])->name('site.about');
Route::get('/contact', [BasicController::class, 'contact'])->name('site.contact');
