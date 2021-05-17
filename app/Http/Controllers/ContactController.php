<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function sendEmail(Request $r){
    	$input = [

    		'name' => $r->name,
    		'email' => $r->email,
    		'subject' => $r->subject,
    		'email_message' => $r->message

    	];

       


    	// Mail::send('Layouts.email.contact', $input, function($mail){
    	// 	$mail->from('contact@banatechai.com','Banate Chai')
    	// 		 ->to('nasirkhan.webdev@gmail.com','insideTheDiv')
    	// 		 ->subject('contact email');
    	// });

    	return back()->with('success','Email Send Success');
    }
}
