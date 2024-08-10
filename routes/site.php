<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BasicController;

Route::get('/',[BasicController::class,'dashboard'])->name('site.dashboard');