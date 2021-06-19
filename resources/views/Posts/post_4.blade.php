@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to solve laravel route not found exception</title>

<meta name="description" content="route not found exception is one of the common exceptions in laravel.  most of the time we show a 404 page if the route not found,  but actually, we can redirect any pace.">

<meta name="keywords" content="laravel redirect to the 404 page, laravel page not found, laravel not found page, laravel redirect to the home page, laravel redirect back if route not found">

<meta property="og:title" content="How to solve laravel route not found exception" />

<meta property="og:description" content="route not found exception is one of the common exceptions in laravel.  most of the time we show a 404 page if the route not found,  but actually, we can redirect any pace." />
<meta property="og:url" content="{{route('Single_Post_4')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_7-18-06-2021-11-29-18pm.gif" />

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
<h1 data-id="3" id="post-title">How to solve laravel route not found exception</h1>
<ul class="post-info">
    <li>Last Updated : 19/06/2021</li>
</ul>


<p class="first-paragraph">
    route not found exception is one of the common exceptions in laravel.  most of the time we show a 404 page if the route not found,  but actually, we can redirect any pace.
</p>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_7-18-06-2021-11-29-18pm.gif" alt="laravel route not found exception">
</div>


<h2>
	 so in this post, we will learn
</h2>

<ol>
	<li>👉 How to redirect a user to the “404 page” if the route not exist.</li>
	<li>👉 How to redirect a user to the homepage if the route not exist.</li>
	<li>👉 How to redirect  back a user if the route not exist.</li>
</ol>




<div class="pt-4">
	<h2>Redirect a user to the "404 page" Laravel</h2>
	<p>
		The 404 is  HTTP Response code and using this code HTTP reminds us that this page not found for this file is not found.   when you get the response code we show a page to our user so that the user can understand easily that this page not found this file is not found.  in the laravel project, we can do this in many ways. <br>
		now you will learn how can we redirect our user to the 404 page using <b>route any</b> method in Laravel
	</p>

	<pre class="prettyprint lang-php">
Route::any('{url}', function(){

	return redirect('/404');

})->where('url', '.*');
</pre>
<p><b>Note:</b> put this code after your all routes</p>

</div>
{{-- end div --}}


<div class="pt-4">
	<h2>Redirect a user to the home page if the route not found or page not found</h2>
	<p>
		Suppose you want to redirect the user to the homepage if the URL is not correct or the page is not found.  to do this in the laravel project you can use <b>route any</b> method.
	</p>

	<pre class="prettyprint lang-php">
Route::any('{url}', function(){

	return redirect('/');

})->where('url', '.*');
</pre>
<p><b>Note:</b> put this code after your all routes</p>

</div>
{{-- end div --}}



<div class="pt-4">
	<h2>Redirect back User is there if the route not exist or face not found</h2>
	<p>
		Redirect user to the same page from where he sends a request for the new page that actually not present on your website. <br>
		Suppose you show your data using pagination and you have only five pages of data.  Now Suppose Caesar is on the 5 number page and sends a request to view the 6 number page which is actually not present on your website.  in this case you can redirect back to the  5 number page, instead of redirect to the 404 pages.
		<br>
		We also solve this using the laravel <b>route any</b> method.
	</p>

	<pre class="prettyprint lang-php">
Route::any('{url}', function(){

	return back();

})->where('url', '.*');
</pre>
<p><b>Note:</b> put this code after your all routes</p>

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

@endsection
