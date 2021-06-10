<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserVerificationController extends Controller
{
   public function user_confirm($email,$token){


   	$api_token = $this->static_api_token();


   	$response = Http::post('https://www.admin.insidethediv.com/api/user/verification',[
   		'token' 	=> $token,
   		'email' 	=> $email,
   		'api_token' => $api_token
   	]);

   	$data  = json_decode($response,true);

 

   	return view('Main.verification',compact('data'));

   }
}
