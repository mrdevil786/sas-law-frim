<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }
}
