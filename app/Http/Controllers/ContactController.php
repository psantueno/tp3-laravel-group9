<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentary;

class ContactController extends Controller
{
    public function getContact()
    {
        $commentaries = Commentary::orderBy('created_at', 'desc')->take(3)->get();
        return view('contact', compact('commentaries'));
    }

    public function createCommentary(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string|max:1000',
        ]);

        Commentary::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('contact')->with('success', 'Mensaje enviado correctamente.');
    }
}
