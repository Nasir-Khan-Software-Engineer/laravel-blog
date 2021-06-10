<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DownloadController extends Controller
{


    public function page($id,$title){
        
        return view('Main.download',compact('id','title'));
    }

    public function download(Request $r){
        $api_token = $this->static_api_token();
    	$post_id 	= $r->post_id;
    	$name  		= $r->name;
    	$email 		= $r->email;

    	$response = Http::post('https://www.admin.insidethediv.com/api/downloader/store',[
    		'post_id'     => $post_id,
    		'email'       => $email,
    		'name'        => $name,
            'api_token'   => $api_token
    	]);

    	return json_decode($response,true);

    }
}
