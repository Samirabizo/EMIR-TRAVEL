<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            "subject" => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $data = $request->only(['name', 'subject', 'email', 'message']);
        Mail::to('samirabizo24@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Message envoyé !');
    }
}
