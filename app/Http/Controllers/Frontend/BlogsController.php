<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 6;
        $routePrefix = 'site.single-blog';
        if ($request->ajax()) {
            $allData = Blog::latest()->with('author')->paginate($perPage);
            return view('site.includes.global-card', ['allData' => $allData,'routePrefix' => $routePrefix])->render();
        }
        $allData = Blog::latest()->with('author')->paginate($perPage);
        return view('site.blog', compact('allData','routePrefix'));
    }
    public function single_blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('site.single-blog', compact('blog'));
    }
    public function downloadPDF($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Load the view and pass the case data to it
        $pdf = Pdf::loadView('site.pdf.blog-study', compact('blog'));

        // Return the generated PDF as a download
        return $pdf->download('blog-study-' . $blog->slug . '.pdf');
    }
}
