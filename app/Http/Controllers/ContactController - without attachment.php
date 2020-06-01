<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;


class ContactController extends Controller
{
    public function getContactUsForm(request $request){
    $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
            'country'   => 'required',
            'subject'   => 'required',
            'budget'    => 'required',
            'date'      => 'required',
            'message'   => 'required']);

        Mail::send('frontEnd/pages/contact-message', [
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'websiteurl'    => $request->websiteurl,
            'country'       => $request->country,
            'subject'       => $request->subject,
            'budget'        => $request->budget,
            'date'          => $request->date,
            'bodyMessage'   => $request->message
        ], function ($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('akazadcse@gmail.com')->subject('Contact Message');

        });

 return redirect()->back()->with('flash_message', 'Thank you! Your message has been sent successfully.');

    }
    

}