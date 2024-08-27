<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BasicController;
use App\Http\Controllers\Frontend\BlogsController;

Route::get('/', [BasicController::class, 'dashboard'])->name('site.dashboard');
Route::get('/services', [BasicController::class, 'services'])->name('site.services');
Route::get('/para-legal', [BasicController::class, 'paraservices'])->name('site.para-legal');
Route::get('/about', [BasicController::class, 'about'])->name('site.about');
Route::get('/contact', [BasicController::class, 'contact'])->name('site.contact');
Route::get('/attorney', [BasicController::class, 'attorney'])->name('site.attorney');

Route::get('/blog', [BlogsController::class,'index'])->name('blog.index');
Route::post('/blog', [BlogsController::class,'store'])->name('blog.store');
