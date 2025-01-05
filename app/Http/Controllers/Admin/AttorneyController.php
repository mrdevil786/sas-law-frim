<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Attorney;
use Illuminate\Http\Request;

class AttorneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attorneys = Attorney::all();
        return view('admin.attorney.index', compact('attorneys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attorney.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $attorney = new Attorney();
        $attorney->image = FileUploader::uploadFile($request->file('image'), 'images/attorney-image');
        $attorney->name = $request->name;
        $attorney->designation = $request->designation;

        $attorney->save();

        return redirect()->route('admin.attorneys.index')->with('success', 'Attorney registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $attorney = Attorney::findOrFail($id);
        $isEdit = false;
        return view('admin.attorney.edit', compact('attorney', 'isEdit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $attorney = Attorney::findOrFail($id);
        $isEdit = true;
        return view('admin.attorney.edit', compact('attorney', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $attorney = Attorney::findOrFail($id);
        $attorney->name = $request->name;
        $attorney->designation = $request->designation;

        if ($request->hasFile('image')) {
            $attorney->image = FileUploader::uploadFile($request->file('image'), 'images/attorney-image', $attorney->image);
        }

        $attorney->save();

        return redirect()->route('admin.attorneys.index')->with('success', 'Attorney updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $attorney = Attorney::findOrFail($id);
        $attorney->delete();

        return redirect()->route('admin.attorneys.index')->with('success', 'Attorney deleted successfully!');
    }
}
