<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // 👈 THIS is the important part
use App\Mail\EMail; // if you're using a Mailable class

class MailController extends Controller
{
    public function sendContact(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'title' => $request->subject ?? 'New Contact Message',
            'body' => "Name: {$request->name}\nEmail: {$request->email}\nSubject: {$request->subject}\nMessage: {$request->message}"
        ];

    try {
        Mail::to('hannahnyongesa@gmail.com')->send(new EMail($data));
        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}


}
