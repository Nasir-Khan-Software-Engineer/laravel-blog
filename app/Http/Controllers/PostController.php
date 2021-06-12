<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search($keyword){


    	 $api_token 	= $this->static_api_token();
    	 $keyword 	    = $keyword;
     

     	$response = Http::post('https://www.admin.insidethediv.com/api/post/search',[
 	    	'keyword'      => $keyword,
            'api_token'    => $api_token
     	]);

     	$response =  json_decode($response,true);
     	$posts = $response['data'];
  

     	return view('Main.search',compact('posts','keyword'));
    }


   


}
