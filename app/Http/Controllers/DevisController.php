<?php

namespace App\Http\Controllers;

use App\Mail\DevisMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{
    public function sendDevis(Request $request)
    {
        $request->validate([
            "departure"=> "required|string|max:255",
            "delivery"=> "required|string|max:255",
            "weight"=> "required|numeric|min:1",
            "dimensions"=> "required|numeric|min:1",
            "name"=> "required|string|max:255",
            "email"=> "required|string|max:255",
            "phone"=> "required|numeric|min:10",
            "message"=> "required|string|max:255",
        ]);

        $data = $request->only([
            "departure",
            "delivery",
            "weight",
            "dimensions",
            "name",
            "email",
            "phone",
            "message"
        ]);

        Mail::to('samirabizo24@gmail.com')->send(new DevisMail($data));
        return back()->with('success','Votre demande de devis a été envoyée avec succès !');
    }
}
