<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CaseStudies;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function downloadPDF($slug)
    {
        $case = CaseStudies::where('slug', $slug)->firstOrFail();

        // Load the view and pass the case data to it
        $pdf = Pdf::loadView('site.pdf.case-study', compact('case'));

        // Return the generated PDF as a download
        return $pdf->download('case-study-' . $case->slug . '.pdf');
    }
}
