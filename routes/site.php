<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BasicController;

Route::get('/',[BasicController::class,'dashboard'])->name('site.dashboard');

Route::get('/about', function () {
    return 'This is about page.';
});