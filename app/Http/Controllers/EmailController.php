<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $name = $request->input('name');
        $userEmail = $request->input('email');
        $messageContent = $request->input('message');

        // Kirim email
        Mail::raw($messageContent, function ($message) use ($name, $userEmail) {
            $message->to('davidriochristian43@gmail.com') // Penerima email
                    ->from($userEmail, $name) // Nama dan email dari input user
                    ->subject('New Message from ' . $name);
        });

        return back()->with('success', 'Email has been sent successfully!');
    }
}


