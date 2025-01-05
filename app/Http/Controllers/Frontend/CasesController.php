<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CaseStudies;
use App\Models\CaseStudy;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 6;
        $routePrefix = 'site.single-case';
        if ($request->ajax()) {
            $allData = CaseStudy::latest()->with('author')->paginate($perPage);
            return view('site.includes.global-card', ['allData' => $allData, 'routePrefix' => $routePrefix])->render();
        }
        $allData = CaseStudy::latest()->with('author')->paginate($perPage);
        return view('site.case', compact('allData', 'routePrefix'));
    }
    public function single_case($slug)
    {
        $case = CaseStudy::where('slug', $slug)->firstOrFail();
        return view('site.single-card', compact('case'));
    }

    public function downloadPDF($slug)
    {
        // Retrieve the CaseStudy by slug
        $case = CaseStudy::where('slug', $slug)->firstOrFail();

        // Check if the PDF file exists
        if (!file_exists($case->image)) {
            abort(404, 'PDF file not found.');
        }

        // Return the PDF file as a download
        return response()->download($case->image, 'case-study-' . $case->slug . '.pdf');
    }
}
