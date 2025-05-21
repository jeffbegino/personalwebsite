<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class PageController extends Controller
{
    public function sendMail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('jayfersonlogicabegino@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Message sent successfully!');
    }
}