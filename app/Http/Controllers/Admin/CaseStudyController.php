<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    public function index()
    {
        $cases = CaseStudy::all();
        return view('admin.case.index', compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.case.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|file|mimes:pdf|max:1024',
        ]);

        // Generate a slug from the title
        $slug = Str::slug($request->title);

        // Check if the slug already exists
        $existingSlug = CaseStudy::where('slug', $slug)->first();
        if ($existingSlug) {
            $slug = $slug . '-' . time(); // Add a unique suffix if slug already exists
        }

        // dd($request->file('banner'), $request->file('image'));

        // Create a new CaseStudy instance
        $case = new CaseStudy();
        $case->slug = $slug;
        $case->banner = FileUploader::uploadFile($request->file('banner'), 'images/case-banner-image');
        $case->title = $request->title;
        $case->description = $request->description;
        $case->image = FileUploader::uploadFile($request->file('image'), 'images/case-pdf');
        $case->author_id = Auth::user()->id;

        // Save the case study
        $case->save();

        return redirect()->route('admin.cases.index')->with('success', 'Case Study registered successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $case = CaseStudy::findOrFail($id);
        $isEdit = false;
        return view('admin.case.edit', compact('case', 'isEdit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $case = CaseStudy::findOrFail($id);
        $isEdit = true;
        return view('admin.case.edit', compact('case', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate inputs
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024', // Allow null if not uploading
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|file|mimes:pdf|max:1024',
        ]);

        // Find the existing case study
        $case = CaseStudy::findOrFail($id);

        // Regenerate slug if title has changed
        if ($case->title != $request->title) {
            $slug = Str::slug($request->title);
            $existingSlug = CaseStudy::where('slug', $slug)->first();
            if ($existingSlug) {
                $slug = $slug . '-' . Str::random(5); // More unique suffix
            }
            $case->slug = $slug;
        }

        // Update the banner image if new one is provided
        if ($request->hasFile('banner')) {
            // Upload the new banner image and replace the old one
            $case->banner = FileUploader::uploadFile($request->file('banner'), 'images/case-banner-image');
        }

        // Update the case fields
        $case->title = $request->title;
        $case->description = $request->description;

        // Update the PDF file if a new one is provided
        if ($request->hasFile('image')) {
            $case->image = FileUploader::uploadFile($request->file('image'), 'images/case-pdf');
        }

        // Save the changes
        $case->save();

        // Redirect back with success message
        return redirect()->route('admin.cases.index')->with('success', 'Case Study updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $case = CaseStudy::findOrFail($id);
        $case->delete();

        return redirect()->route('admin.cases.index')->with('success', 'Case Study deleted successfully!');
    }
}
