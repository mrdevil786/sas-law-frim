<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Mail\InternshipFormMail;
use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InternshipController extends Controller
{
    public function index()
    {
        return view("site.internship");
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // $data['resume'] = $request->file('resume');
        // Mail::to('khanmuba3@gmail.com')->send(new InternshipFormMail($data));

        // return view('site.contact')->with('success','Message Sent Successfully!');
        $resume = $request->file('resume');
        $resumePath = FileUploader::uploadFile($resume, 'files/internship-resume');

        Internship::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'resume' => $resumePath,
            'author_id' => auth()->user()->id,
        ]);


        return redirect()->route('site.dashboard')->with('success', 'Message Sent Successfully!');
    }
}
