<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendEmailFrontController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
       
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'EmailEntreprise' => $request->input('project'),
            'message' => $request->input('message'),
        ];
        /* dd($data['EmailEntreprise']); */
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to($data['EmailEntreprise'])->subject('New Message From The web Application');
            $message->from($data['email']);
        });

         // Stockez le message flash
         Session::flash('success', 'Email sent successfully!');

         return redirect()->back();
    }
}
