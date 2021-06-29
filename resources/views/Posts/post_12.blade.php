@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to Call JavaScript function after div load with source code</title>

<meta name="description" content="Sometimes you need to call javascript function after div load, or we need to execute a function after the div load. In this post, I will provide you the technique to solve how to call a javascript function after div load.">

<meta name="keywords" content="js on load,
doc ready jquery,
Execute Function On Div Load,
call function after div load">

<meta property="og:title" content="How to Call JavaScript function after div load with source code" />

<meta property="og:description" content="Sometimes you need to call javascript function after div load, or we need to execute a function after the div load. In this post, I will provide you the technique to solve how to call a javascript function after div load." />
<meta property="og:url" content="{{route('Single_Post_12')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_14-29-06-2021-08-04-18pm.jpg" />

{{-- twitter card description --}}
<meta name="twitter:card" content="route not found exception is one of the common exceptions in laravel.  most of the time we show a 404 page if the route not found,  but actually, we can redirect any pace."></meta>

@endsection


@section('top-ad')
{{-- <div  class="pb-3 ad-image">
    <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div> --}}
@endsection

@section('cover-image')
{{-- <img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript"> --}}
{{-- <img src="https://via.placeholder.com/1020x400" alt=""> --}}
@endsection



{{-- start post content --}}
@section('main-content')
<h1 data-id="3" id="post-title">How to Call JavaScript function after div load with source code</h1>
<ul class="post-info">
    <li>Last Updated : 30/06/2021</li>
</ul>


<p class="first-paragraph">
   Sometimes you need to call javascript function after div load, or we need to execute a function after the div load. In this post, I will provide you the technique to solve how to call a javascript function after div load.
</p>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_14-29-06-2021-08-04-18pm.jpg" alt="Call JavaScript function after div">
</div>


<div>
	<h2>
		 The Main Idea For Call A Js Function After Div Load
	</h2>

	<p>
		Suppose you have a div called my_area(id), now you want to call a javascript function after the my_area div load completely. <br>
		Now think logically if your div(my_area) is loaded then it must have a width and if it is not loaded then it has no width. <br>
		So check the width of your div and if you found that it has div then call your function. <br>
		Also, you need to check the width until your fund width is greater than zero because you do not know when it will load and if you found that means your div's width is greater than zero then stop checking and call your function.
	</p>
</div>


<div>
	<h2>HTML code of "call javascript function after div load"</h2>
<pre class="prettyprint lang-php">
&lt;div id="my_area">
	call a javascript function after load this div
	ID of this div is my_area
&lt;/div> 
</pre>
</div>


<div class="pt-4">
	<h2>"Call Javascript Function After Div Load" Raw JavaScript</h2>

	<pre class="prettyprint lang-php">
var checkDiv = setInterval(function(){

var my_div_width = $("#my_area").width(); // find width

if( my_div_width > 0) { 
	clearInterval(checkDiv);
	 	aTestFunction();
	}
}, 10); // check after 10ms every time

function aTestFunction(){
	return "called";
}
</pre>
<small><b>Note:</b> Using setInterval you can chack your div's width continuously after every 10ms, using clearInterval you can stop checking.
</small>

<h2>"Call Javascript Function After Div Load" Jquery Example</h2>
	<pre class="prettyprint lang-php">
document.querySelector('#my_area').addEventListener('load', function(){
  aTestFunction();
});

function aTestFunction(){
	return "called";
}
</pre>
<small>The a "aTestFunction" will call after the my_area div loaded.
</small>


</div>
{{-- end div --}}


@endsection
{{-- end post content --}}





@section('code')

@endsection

@section('video')
    {{-- <iframe id="video_show" class="my-2" width="100%" height="400" src="https://www.youtube.com/embed/mpab1b4jvXg">
     </iframe> --}}
@endsection



@section('bottom-ad')
{{-- <div  class="pb-3 ad-image">
    <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div> --}}
@endsection



@section('author')
    @include('Layouts.Author.Author-Nasir')
@endsection

@section('comment')
    @include('Layouts.comment')
@endsection


@section('releted-post')
<ul class="m-0 p-0">
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_3')}}">Click On The Image To View Full Size In A Popup Modal</a></li>
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_5')}}">A Responsive Dropdown menu with Submenu</a></li>
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_1')}}">How Many Ways We Can Select HTML Tag Or HTML DOM Elements In Javascript</a></li>
  <li class="border-top my-1"><a class="text-primary" href="{{route('Single_Post_2')}}">How To Create Popup Modal Or Popup Message Box With Time Countdown In Javascript</a></li>
</ul>
@endsection
