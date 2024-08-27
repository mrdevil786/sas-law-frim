<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function dashboard()
    {
        return view('site.home');
    }

    public function services()
    {
        return view('site.services');
    }
    public function paraservices()
    {
        return view('site.para-legal');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function about()
    {
        return view('site.about');
    }

    public function attorney(){
        return view('site.attorney');
    }
}
