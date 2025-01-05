<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('khanmuba3@gmail.com')->send(new ContactFormMail($validatedData));

        // return view('site.contact')->with('success','Message Sent Successfully!');
        return redirect()->route('site.dashboard')->with('success', 'Message Sent Successfully!');
    }
}
