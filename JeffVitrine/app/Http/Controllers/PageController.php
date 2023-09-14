<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function sendContactMail(Request $request)
    {
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');


        try {
            Mail::raw($message, function ($mail) use ($email, $subject) {
                $mail->from($email)
                    ->to('alexis.poillot@gmail.com')
                    ->subject($subject);
            }); //code...
        } catch (\Exception $e) {
            dd('erreur');
        }


        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
