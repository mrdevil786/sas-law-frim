<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->with('author')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function view()
    {
        return view('admin.blog.edit');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg,webp,svg,gif',
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);


        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($blog->title);  // Set slug after title
        $blog->description = $request->description;
        $blog->author_id = Auth::user()->id;

        if ($request->hasFile('image')) {
            $blog->image = FileUploader::uploadFile($request->file('image'), 'images/blog-image');
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog posted successfully!');
    }



    // DELETE A Blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
