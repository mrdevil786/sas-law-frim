<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\CaseStudies;
use Illuminate\Support\Facades\Auth;

class CasesController extends Controller
{
    public function index()
    {
        $cases = CaseStudies::latest()->with('author')->get();
        return view('admin.case.index',compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isEdit = false;
        $case = new CaseStudies();
        return view('admin.case.edit',compact('isEdit','case'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'nullable|mimes:png,jpg,jpeg,webp,svg,gif',
            'title' => 'required|string|max:255|unique:case_studies,title',
            'description' => 'required',
        ]);

        $case = new CaseStudies();
        $case->title = $request->title;
        $case->slug = Str::slug($request->title);
        $case->description = $request->description;
        $case->author_id = Auth::user()->id;

        if($request->hasFile('image')){
            $case->image = FileUploader::uploadFile($request->file('image'),'images/case-studies');
        }
        $case->save();

        return redirect()->route('admin.cases.index')->with('success','Case Study Posted Successfully');
    }
    public function edit($id)
    {
        $case = CaseStudies::findOrFail($id);
        $isEdit = true;
        return view('admin.case.edit',compact('case','isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $case = CaseStudies::findOrFail($id);
        $case->title = $request->title;
        $case->slug = Str::slug($request->title);
        $case->description = $request->description;

        if ($request->hasFile('image')){
            $case->image = FileUploader::uploadFile($request->file('image'),'images/case-studies');
        }
        $case->save();

        return redirect()->route('admin.case.index')->with('success','Case Study Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $case = CaseStudies::findOrFail($id);

        if($case->image){
            FileUploader::deleteFile($case->image);
        }
        $case->delete();

        return redirect()->route('admin.cases.index')->with('success','Case Study Deleted Successfully');
    }
}
