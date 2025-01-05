<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Attorney;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Review;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function dashboard()
    {
        $attorneys = Attorney::all();
        $clients = Client::all();
        $gallerys = Gallery::all();
        return view('site.home', compact('attorneys','clients', 'gallerys'));
        // return view('site.home');
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
    public function internship()
    {
        return view('site.internship');
    }
    public function review()
    {
        $reviews = Review::all();
        return view('site.review',compact('reviews'));
    }

    public function about()
    {
        $attorneys = Attorney::all();
        $clients = Client::all();
        $gallerys = Gallery::all();
        return view('site.about', compact('attorneys','clients','gallerys'));
    }

    public function attorney(){
        $attorneys = Attorney::all();
        $clients = Client::all();
        return view('site.attorney', compact('attorneys','clients'));
    }

    public function gallery(){
        // return view ('site.gallery');
        $gallerys = Gallery::all();
        return view('site.gallery', compact('gallerys'));
    }
    public function client(){
        $clients = Client::all();
        return view('site.client', compact('clients'));
    }


}
