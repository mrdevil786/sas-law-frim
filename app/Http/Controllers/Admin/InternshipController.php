<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internships = Internship::all();
        return view('admin.internship.index', compact('internships'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $internship = Internship::findOrFail($id);
        $internship->delete();

        return redirect()->route('admin.internships.index')->with('success', 'Internship Deleted successfully!');
    }
}
