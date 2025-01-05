<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("site.review");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required',
        ]);

        Review::create([
            'name' => $request->input('name'),
            'message' => $request->input('message'),
            'author_id' => auth()->user()->id,
        ]);

        // return view('site.contact')->with('success','Message Sent Successfully!');
        return redirect()->route('site.review')->with('success', 'Review Submitted Successfully!');
    }
}
