@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>Simple JavaScript Project with source code | Digital clock</title>

<meta name="description" content="can we build a website using only bootstrap-5 without any raw CSS?  The answer is yes,  using only the bootstrap-5 we can create a complete Responsive website.">

<meta name="keywords" content="simple javascript project,
javascript project with source code,
javascript project 2021,
how to get current date and time using javascript,
how to call a function repeatedly or cautiously,
javascript digital clock">

<meta property="og:title" content="Simple JavaScript Project with source code | Digital clock" />

<meta property="og:description" content="Creating a digital clock in javascript is so simple. If you know how to get the time and call a function continuously for a specific time using javascript, it's really easy for you." />
<meta property="og:url" content="{{route('Single_Post_16')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_18-09-07-2021-06-27-09am.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content="Creating a digital clock in javascript is so simple. If you know how to get the time and call a function continuously for a specific time using javascript, it's really easy for you."></meta>

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
<h1 data-id="3" id="post-title">Simple JavaScript Project with source code | Digital clock</h1>
<ul class="post-info">
    <li>Last Updated : 9/07/2021</li>
</ul>


<p class="first-paragraph">
   Creating a digital clock in javascript is so simple. If you know how to get the time and call a function continuously for a specific time using javascript, it's really easy for you.
</p>
<p>
	 So in this post, we will learn how to create a simple javascript digital clock. To create a javascript digital clock first of all we should know:
</p>

<ul>
	<li>✅  How to show data in HTML tag using javascript.</li>
	<li>✅  How to get the current  date and time in javascript.</li>
	<li>✅  How to call a function repeatedly or continuously for a specific time.</li>
	
</ul>


<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_18-09-07-2021-06-27-09am.gif" alt="javascript digital clock">
	<br> <br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}" class="btn btn-danger">Download Full Source Code</a>
</div>



<div>
	<h2>How to show data in HTML tag using javascript?</h2>
	<p>
		Javascript provides us a very cool method called <var>innerHTML</var> To show data in HTML tag. <br>
		<b>Example:</b>
		<br>
		Suppose we have an h1 tag and now we want to show some text inside the h1 tag using javascript, we can do this.
	</p>
	
	<pre class="prettyprint lang-js">
h1.innerHTML = "insideTheDiv";
</pre>
	<small>This line will show “insideTheDiv” text inside the h1 tag.</small>

	<p><b>Note:</b> We will show our time like this to create a digital clock.</p>


	<pre class="prettyprint lang-js">
&lt;span id="hours">&lt;/span>
&lt;span>:&lt;/span>
&lt;span id="minutes">&lt;/span>
&lt;span>:&lt;/span>
&lt;span id="seconds">&lt;/span>
&lt;span id="am-or-pm">&lt;/span>

document.getElementById("hours").innerHTML=5;
document.getElementById("minutes").innerHTML=34;
document.getElementById("seconds").innerHTML=45;
am_or_pm.innerHTML = 'PM';
</pre>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}">Download</a> this complte soruce code.</small>
</div>
{{-- // end head section --}}

<div >
	<h2>How to get the current date and time using javascript</h2>
	<p>
		Getting date and time is so easy in javascript. To create a javascript Date object we can easily get the current date and time.
	</p>

	<pre class="prettyprint lang-js">
var dateTime = new Date();
var hours = dateTime.getHours();
var minutes = dateTime.getMinutes();
var seconds = dateTime.getSeconds();
</pre>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}">Download</a> this complte soruce code.</small>
<p><b>Note:</b></p>

<p>
	👉 Javascript will provide the house value in a global format that means it will count hours 1 to 24, to get the actual value we need to subtract 12 to make it 1 to 12. <br>
	👉 To show ‘AM’ and ‘PM’ we will check, is our hours greater than 12 or not?
</p>

<pre class="prettyprint lang-js">
if(hours > 12){
	hours = hours - 12;
}
if(hours >= 12){
	// 'PM';
}else{
	//'AM';
}
</pre>
<small>Watch this <a class="text-primary" href="#video">video</a> for a better understanding</small> <br>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}">Download</a> this complte soruce code.</small>
</div>
{{-- end about section --}}

<div >
	<h2>How to call a function  repeatedly or continuously for a specific time</h2>
	<p>
		To call a function repeatedly to continuously for a specific time javascript provides us with a method called <var>setInterval()</var>. This method will take two parameters. The first one is our function name which we want to call and the second one is our specific time (in milliseconds).
	</p>

	<pre class="prettyprint lang-js">
function updateTime(){
    // all code goes here
}
setInterval( updateTime, 1000); // 1000 milliseconds = 1 second
</pre>
<small>To create a javascript digital clock we will call our update time function for every one second so that we can see update time in every second.</small>
<br>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}">Download</a> this complte soruce code.</small>
</div>
{{-- end about section --}}





@endsection
{{-- end post content --}}





@section('code')
	<br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>18,'title'=>'javascript-digital-clock'])}}" class="btn btn-danger">Download Main Code</a>
@endsection

@section('video')
    <iframe id="video_show" class="my-2" width="100%" height="400" title="Simple javascript project 😮😱 Digital clock 😍 With Source Code" src="https://www.youtube.com/embed/y2wduI7DFf8">
     </iframe>
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
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_11')}}">Center an image in a div vertically and horizontally</a></li>
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_6')}}">Unit Converter</a></li>
</ul>
@endsection
