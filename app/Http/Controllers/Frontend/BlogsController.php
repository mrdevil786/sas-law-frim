<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->with('author')->get();
        return view('site.blog',compact('blogs'));
    }

    public function single_blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('site.single-blog', compact('blog'));
    }
}
