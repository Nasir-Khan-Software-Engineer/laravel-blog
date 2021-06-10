<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ContactController extends Controller
{
    public function sendEmail(Request $r){

        $api_token = $this->static_api_token();

        $response = Http::post('https://www.admin.insidethediv.com/api/email/store',[
            'name'            => $r->name,
            'email'           => $r->email,
            'subject'         => $r->subject,
            'message'         => $r->message,
            'api_token'       => $api_token
        ]);


    	return json_decode($response,true);
    }
}
