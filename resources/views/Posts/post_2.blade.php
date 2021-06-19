@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to create popup modal or popup message box using javascript</title>
<meta name="description" content="popup modal or popup message box is one of the common features of every project. In this post we will learn we can we create a popup modal box using javascript. we will learn how automatically show and close popup modal, also learn how show and close popup modal after click.">

<meta name="keywords" content="open modal popup using jquery on button click, jquery modal popup example, javascript open popup window, popup in javascript on click, how to create popup in html with css, javascript openpopup, popup js, popup modal jquery, alert box javascript, popup javascript, modals html, pop up javascript,">

<meta property="og:title" content="How to create popup modal or popup message box using javascript" />
<meta property="og:description" content="popup modal or popup message box is one of the common features of every project. In this post we will learn we can we create a popup modal box using javascript. we will learn how automatically show and close popup modal, also learn how show and close popup modal after click." />
<meta property="og:url" content="" />
<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/1623665919.jpg" />

{{-- twitter card description --}}
<meta name="twitter:card" content="popup modal or popup message box is one of the common features of every project. In this post we will learn we can we create a popup modal box using javascript. we will learn how automatically show and close popup modal, also learn how show and close popup modal after click."></meta>

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
<h1 data-id="3" id="post-title">How to create popup modal or popup message box using javascript</h1>
<ul class="post-info">
    <li>Last Updated : 14/06/2021</li>
</ul>


<p class="first-paragraph">
    The popup modal or popup message box is one of the common and important features of every project. Using a popup modal or popup alert box we can easily give some message to our user. In this post we will learn we can we create a popup modal box using javascript.
    Also, I will provide you the complete <a class="text-primary" href="">source code</a>.
</p>



<h2>So we will learn</h2>

<ol>
	<li>👉 How to design a popup modal box using HTML and CSS.</li>
	<li>👉 How to show popup modal box using javascript.</li>
	<li>👉 How to close popup modal box after a click using javascript.</li>
	<li>👉 How to show popup modal box automatically using javascript.</li>
	<li>👉 How to hide popup modal box automatically using javascript.</li>
	<li>👉 How to countdown time to close or show popup modal box using javascript</li>
</ol>



<div class="py-3 text-center">
	<img class="img-fluid" src="https://admin.insidethediv.com/assets/img/post/post_4-15-06-2021-08-02-41pm.gif" alt="popup modal With Time Countdown In Javascrip">
</div>

<div  class="py-2">
	<h2>Types of popup modal or popup message box</h2>
	<p>
		There are different types of popup modal or popup alert box you will see on the internet, but the most common type is to show and hide a popup modal after a click. In this post, we will learn the main concept of show and hiding popup modal box.
	</p>
<br>

	<ol>
		<li>Show and close a popup modal box <b>after click</b> a button using javascript.</li>
		<li><b>Automatically show</b> popup modal box but close after the click using javascript.</li>
		<li>Show a popup modal box after the click but <b>close the popup modal automatically.</b></li>
		<li>Automatically show and hide a popup modal box <b>with a time countdown</b>.</li>
	</ol>
</div>




<div>
	<h2>The general algorithm of creating a popup modal box</h2>

	<ol>
		<li>
		    Design a pop-up box using HTML and CSS
		    <ol  type="i" >
		    	<li>Use CSS position property</li>
		    	<li>For animation(slow, fast) use CSS transaction property</li>
		    	<li>Hide your modal box using CSS display none property</li>
		    </ol>
	    </li>


	    <li>
	    	Show popup modal box after a click
	    	<ol type="i">
	    		<li>To do something after the click use the javascript click event</li>
	    		<li>To show popup modal, add CSS display block property to your modal using javascript.</li>
	    	</ol>
	    </li>

	    <li>
	    	Close popup modal after the click
	    	<ol type="i">
	    		<li>After clicking the close button, add CSS display none property using javascript</li>
	    	</ol>
	    </li>

	    <li>
	    	Show popup modal automatically
	    	<ol type="i">
	    		<li>Use javascript setTimeout method to show popup modal automatically</li>
	    		<li>Add CSS display block property using setTimeout method.</li>
	    	</ol>
	    </li>

	    <li>
	    	Close popup modal automatically
	    	<ol type="i">
	    		<li>Again User javascript setTimeout method to close popup modal automatically</li>
	    		<li>Add CSS display none property using setTimeout method</li>
	    	</ol>
	    </li>

	    <li>
	    	Add time countdown on popup modal box
	    	<ol type="i">
	    		<li>Use javascript setInterval method to update time</li>
	    		<li>Call your update time method after every second continuously using the setInterval method</li>
	    		<li>When the time will match your condition call your show and hide methods to show and hide popup modal.</li>
	    	</ol>
	    </li>
	</ol>
</div>

<div>
	<h2>How to Create popup modal  in HTML</h2>

	<p>Try to keep it simple, if your pop-up message contains only an image then take a div, and inside the div keep your image also if you want to close your popup modal after a click takes a button inside the div. To make your control(js) easy you can use id to your main div and your close button.</p>
	<p>
		<b>Suggestion:</b> HTML provides a cool dialog tag to create this kind of pop-up message box you can use this if you want.
	</p>
	<br>
	<h3 style="font-size: 17px">modals html</h3>
	<pre class="prettyprint lang-html">
&lt;div id="my-popup">
	&lt;button id=”close-bnt”>X&lt;/button>
	// your content goes here
&lt;/div>
	</pre>
		<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
</div>


<div>
	<h2>How to Design popup modal  in CSS</h2>

	<p>Give a fixed size and width to your popup modal, then if you want to keep your message box above all the content you need to use CSS position(absolute) and z-index property.</p>
	
	<h3>Hiding the popup modal box using css</h3>

	<p>
		most of the time we want to keep our pop-up message box hide for the first time. So to did this, use CSS display property, don't do this using js for hiding the first time hiding.
	</p>

	<br>

	<h4 style="font-size: 17px">modals css</h4>

	<pre class="prettyprint lang-css">
#my-popup{
	Width: 600px;
	Height: 400px;
	Background: gray;
	Box-sizing: border-box; /* for inside padding */
	Padding: 10px;

	/* for center */
	Position:absolute;
	top:50%;
	left:50%;
	Transform: translate(-50%,-50%);

	/* for hider */
	display:none;
}
	</pre>
		<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
</div>


<div>
	<h2>Show popup modal box using javascript</h2>
	<p>
		We already know, we just hide our modal using CSS display none property. Now to show the popup modal box we just need to change the display none to display block. So to show the popup modal using javascript we will apply CSS to our popup modal using javascript.
	</p>
	<h3>javascript open popup modal box</h3>
	<pre class="prettyprint lang-js">
function showPopUp(){
	my_popup.style.display="block";
}</pre>
	<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
</div>



<div>
	<h2>Close popup modal box using javascript</h2>
	<p>
		To hide the popup modal box using javascript we need to apply CSS display none to our popup modal div using javascript.
	</p>
	<h3>javascript close popup modal box</h3>
	<pre class="prettyprint lang-js">
function hidePopUp(){
	my_popup.style.display="none";
}
</pre>
	<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
</div>




<div>
	<h2>Automatically show popup modal box using javascript</h2>
	<p>
		To show something you need to use the CSS display block property, and automatically means after our website load or after some specific(defined) time CSS display property will apply to our popup modal box. Now to do something after a specific amount of time or automatically we can use the javascript 'setTimeout" method, this function takes two parameters first one is a callback function or code and the second one is the waiting time(in milliseconds).
	</p>
	<h3>javascript open popup modal box automatically </h3>
	<pre class="prettyprint lang-js">
function showPopUp(){
	my_popup.style.display="block";
}
setTimeout(showPopUp,60000);
</pre>
	<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
<p><b>Note: </b>in this case, the "showPopUp" function will call automatically after 60000 milliseconds or 1 minute.</p>
</div>


<div>
	<h2>Close popup modal box automatically using javascript</h2>
	<p>
		To close your popup modal box automatically you need to set CSS display none automatically. So you can also use the "setTimeout" method. make sure you use waiting time technically. 
	</p>
	<h3>javascript close popup modal box automatically </h3>
	<pre class="prettyprint lang-js">
function ClosePopUp(){
	my_popup.style.display="none";
}
setTimeout(ClosePopUp,120000)

</pre>
	<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
<p><b>Note: </b>in this case, the "ClosePopUp" function will call automatically after 120000 milliseconds or 2 minutes.</p>

<p>
	<b>Tips</b> <br>
	1 secound = 1000 milliseconds <br>
	1 minute = 60000 milliseconds
</p>
</div>



<div>
	<h2>Close popup modal box after clicking the close button</h2>
	<p>
		The most common technique of closing a popup modal is clicking a button, and it is so easy to just call your close function (ClosePopUp) after the close button click.
	</p>
	<h3>javascript close popup modal after click </h3>
	<pre class="prettyprint lang-html">
&lt;button onclick="ClosePopUp()">Close&lt;/button>
function ClosePopUp(){
	my_popup.style.display="none";
}
</pre>
	<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
</div>


<div>
	<h2>Time Countdown to show or hide a popup modal</h2>
	<p>
		Countdown time in javascript is easy but you need to handle it technically. If you think deeply, you will find, the countdown time scenario is just updating a number every second. And if you want to do something based on count downtime you can check the number after updating every time.
	</p>

	<p>
		Now suppose we want to hide our popup modal after 10 seconds automatically by showing the time countdown, we need to update a number from 1 to 10. That means we need to call a function (updatOurTme) continuously for every 1 second until our number becomes 10.
	</p>

	<p>
		To call a function continuously for a specific time javascript provides the <b>setInterval</b> method, this method takes two parameters first one is our update function and the second one is time.
	</p>



	<h3>javascript time countdown to close a popup modal</h3>
	<pre class="prettyprint lang-js">
var time_in_sec = 0;
var start_calling = ‘’;
function showPopUp(){
 // start time update after popup modal show	
  start_calling = setInterval(countdownTime,1000); // call every one sec
 }

function countdownTime(){
  time_in_sec++;
  html_tag.innerHTML = time_in_sec; // show time in html tag
  if(time_in_sec == 10){
clearInterval(start_calling) // stop calling
ClosePopUp();;
  }
}
function ClosePopUp(){
	// close popup modal
}

</pre>
	<span><a class="text-primary" href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}">Download</a> Complete Source Code Free.</span> <br>
</div>




@endsection
{{-- end post content --}}







@section('code')
    <a href="{{route('Download.Page',['id'=>4,'title'=>'How-to-create-popup-modal-or-popup-message-box-using-javascript'])}}" class="btn btn-danger">Download Source Code</a>
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
<ul>
	<li><a href="/how-many-ways-we-can-select-html-tag-or-html-dom-elements-in-javascript">How Many Ways We Can Select HTML Tag Or HTML DOM Elements In Javascript</a></li>
</ul>
@endsection
