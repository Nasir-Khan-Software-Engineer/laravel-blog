<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $r){
        $api_token = $this->static_api_token();

    	$name  		= $r->name;
    	$email 		= $r->email;
    
    	$response = Http::post('https://www.admin.insidethediv.com/api/subscriber/store',[
    		'name'  		=> $name,
	    	'email' 		=> $email,
            'api_token'     => $api_token
    	]);


    	return json_decode($response,true);
    }
}
