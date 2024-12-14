<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CaseStudies;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 6;
        $routePrefix = 'site.single-case';
        if ($request->ajax()) {
            $allData = CaseStudies::latest()->with('author')->paginate($perPage);
            return view('site.includes.global-card', ['allData' => $allData, 'routePrefix' => $routePrefix])->render();
        }
        $allData = CaseStudies::latest()->with('author')->paginate($perPage);
        return view('site.case', compact('allData','routePrefix'));
    }
    public function single_case($slug)
    {
        $case = CaseStudies::where('slug', $slug)->firstOrFail();
        return view('site.single-card', compact('case'));
    }
}
