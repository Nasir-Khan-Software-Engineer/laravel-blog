<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function store_comment(Request $r){

        
        $api_token = $this->static_api_token();

    	$name  		= $r->name;
    	$email 		= $r->email;
    	$body 	    = $r->body;
    	$post_id    = $r->post_id;

    	$response = Http::post('https://www.admin.insidethediv.com/api/comments/store',[
    		'name'  		=> $name,
	    	'email' 		=> $email,
	    	'body' 	        => $body,
	    	'post_id'       => $post_id,
            'api_token'     => $api_token
    	]);


    	return json_decode($response,true);
    }

    public function all_comments_of_this_post(Request $r){
    	$post_id = $r->post_id;
    	$comments = Http::get('https://www.admin.insidethediv.com/api/post/'.$post_id.'/comments');
    	return json_decode($comments,true);
    }
}
