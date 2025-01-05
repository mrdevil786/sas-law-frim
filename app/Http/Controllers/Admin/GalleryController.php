<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::all();
        return view('admin.gallery.index', compact('gallerys'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
        ]);

        $gallery = new Gallery();
        $gallery->image = FileUploader::uploadFile($request->file('image'), 'images/gallery-image');

        $gallery->save();

        return redirect()->route('admin.gallerys.index')->with('success', 'Photo added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $gallery = Gallery::findOrFail($id);
        $isEdit = false;
        return view('admin.gallery.edit', compact('gallery', 'isEdit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $isEdit = true;
        return view('admin.gallery.edit', compact('gallery', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $gallery->image = FileUploader::uploadFile($request->file('image'), 'images/gallery-image', $gallery->image);
        }

        $gallery->save();

        return redirect()->route('admin.gallerys.index')->with('success', 'Gallery Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('admin.gallerys.index')->with('success', 'Photo Deleted successfully!');
    }
}
