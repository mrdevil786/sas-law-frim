<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BasicController;
use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\CasesController;
use App\Http\Controllers\Frontend\MediaController;
use App\Models\Media;

Route::get('/', [BasicController::class, 'dashboard'])->name('site.dashboard');
Route::get('/services', [BasicController::class, 'services'])->name('site.services');
Route::get('/para-legal', [BasicController::class, 'paraservices'])->name('site.para-legal');
Route::get('/about', [BasicController::class, 'about'])->name('site.about');
Route::get('/contact', [BasicController::class, 'contact'])->name('site.contact');
Route::get('/attorney', [BasicController::class, 'attorney'])->name('site.attorney');
Route::get('/gallery',[BasicController::class, 'gallery'])->name('site.gallery');

Route::get('/blog', [BlogsController::class,'index'])->name('blog.index');
Route::post('/blog', [BlogsController::class,'store'])->name('blog.store');
Route::get('/blog/{slug}', [BlogsController::class, 'single_blog'])->name('site.single-blog');

Route::get('/case', [CasesController::class,'index'])->name('case.index');
Route::post('/case', [CasesController::class,'store'])->name('case.store');
Route::get('/case/{slug}', [CasesController::class, 'single_case'])->name('site.single-case');

Route::get('/media', [MediaController::class,'index'])->name('media.index');
Route::post('/media', [MediaController::class,'store'])->name('media.store');
Route::get('/media/{slug}', [MediaController::class, 'single_media'])->name('site.single-media');
