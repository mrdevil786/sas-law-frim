<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function dashboard(){
        return view('site.home');
    }

    public function services(){
        return view('site.services');
    }

    public function about(){
        return view('site.about');
    }

    public function contact(){
        return view('site.contact');
    }
}
