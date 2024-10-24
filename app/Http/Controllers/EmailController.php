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
            'user_email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Email tujuan (owner)
        $ownerEmail = 'davidriochristian43@gmail.com'; // Ganti dengan email owner yang sebenarnya

        // Mengirim email ke owner
        Mail::send([], [], function ($message) use ($request, $ownerEmail) {
            $message->to($ownerEmail)
                    ->from(config('mail.from.address'), config('mail.from.name')) // Menggunakan konfigurasi dari file config
                    ->replyTo($request->user_email) // Mengatur Reply-To ke email input pengguna
                    ->subject('Message from Website Visitor')
                    ->html('<p>' . nl2br(e($request->message)) . '</p>'); // Menggunakan metode html() untuk set konten email
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}


