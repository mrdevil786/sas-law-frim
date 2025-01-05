<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->with('author')->get();
        return view('admin.media.index',compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isEdit = false;
        $media = new Media();
        return view('admin.media.edit',compact('isEdit','media'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'nullable|mimes:png,jpg,jpeg,webp,svg,gif',
            'title' => 'required|string|max:255|unique:media,title',
            'description' => 'required|string|max:65535',
        ]);

        // Generate a slug from the title
        $slug = Str::slug($request->title);

        // Check if the slug already exists
        $existingSlug = Media::where('slug', $slug)->first();
        if ($existingSlug) {
            $slug = $slug . '-' . time(); // Add a unique suffix if slug already exists
        }

        $media = new Media();
        $media->slug = $slug;
        $media->title = $request->title;
        $media->description = $request->description;

        if($request->hasFile('image')){
            $media->image = FileUploader::uploadFile($request->file('image'),'images/media');
        }
        $media->save();

        return redirect()->route('admin.medias.index')->with('success','Media & Publications Posted Successfully');
    }
    public function edit($id)
    {
        $media = Media::findOrFail($id);
        $isEdit = true;
        return view('admin.media.edit',compact('media','isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $media = Media::findOrFail($id);
        $media->title = $request->title;
        $media->description = $request->description;

        if ($request->hasFile('image')){
            $media->image = FileUploader::uploadFile($request->file('image'),'images/media');
        }
        $media->save();

        return redirect()->route('admin.media.edit')->with('success','Media Study Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);

        if($media->image){
            FileUploader::deleteFile($media->image);
        }
        $media->delete();

        return redirect()->route('admin.medias.index')->with('success','Media Study Deleted Successfully');
    }
}
