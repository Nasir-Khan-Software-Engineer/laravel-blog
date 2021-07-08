@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to change background image using javascript</title>

<meta name="description" content="To make our 'email signature' productive, we need to make it clickable first. Also Putting clickable Social media icons is the best practice.">

<meta name="keywords" content="Clickable email signature,
Characteristics  of a Professional email signature,
What is an email signature,
How an email signature work,
Why should use an email signature,
 user-friendly email signature,
use an icon to an email signature,
use an image to the email signature,
use CSS to an email signature,
div or table tag for HTML email signature,
How to make a responsive email signature.
standard email signature size in pixel">

<meta property="og:title" content="How to change background image using javascript" />

<meta property="og:description" content="Using javascript we can change our HTML elements easily. In this post, we will learn how can we change background images using javascript." />
<meta property="og:url" content="{{route('Single_Post_14')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_16-07-07-2021-01-19-47am.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content="Using javascript we can change our HTML elements easily. In this post, we will learn how can we change background images using javascript."></meta>

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
<h1 data-id="3" id="post-title">How to change background image using javascript</h1>
<ul class="post-info">
    <li>Last Updated : 7/07/2021</li>
</ul>


<p class="first-paragraph">
   Using javascript we can change our HTML elements easily. In this post, we will learn how can we change background images using javascript.
</p>
<br>
<p>We will learn three types of background changing tecnique.</p>
<ul>
	<li>✅  Change background image automatically.</li>
	<li>✅  Change background image after clicking on the button.</li>
	<li>✅  Change background image randomly.</li>
</ul>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_16-07-07-2021-01-19-47am.gif" alt="change background image using javascript">
	<br> <br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}" class="btn btn-danger">Download Main Code</a>
</div>


<div>
	<h2>
		 Change background image using javascript.
	</h2>

	<p>
		Change the background image is actually changing the CSS or apply the CSS to our elements. So if you know how to apply or change the CSS of an HTML element using javascript, you can change the background image easily.
		<br>
		So to apply or change the CSS of an HTML element first we need to select the element then change or apply the CSS using the style property of our element.
	</p>
	<h2> Let’s change the background image using javascript</h2>

<pre class="prettyprint lang-js">
myDiv.style.backgroundImage = "url('your-image-path')";
</pre>
<small>Here, inside the url method you need to put your image path.</small> <br>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}">Download</a> the complete soruce code.</small>
</div>



<div>
	<h2>
		 Changes background image automatically.
	</h2>

<pre class="prettyprint lang-js">
changeBackgroundImageAutomatically();
function changeBackgroundImageAutomatically(){
 // main code  goes here
}
</pre>
<small>Here we just call our functions <var>changeBackgroundImageAutomatically()</var> without any event trigger.</small><br>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}">Download</a> the complete soruce code.</small>
</div>


<div>
	<h2>
		 Change background image after a button Click.
	</h2>

<pre class="prettyprint lang-js">
bgChageBtn.addEventListener('click',function(){
	chageBackgroundAfterClick();
})
function chageBackgroundAfterClick(){
 // main code  goes here
}
</pre>
<small>Here we call our <var> chageBackgroundAfterClick()</var> function after clicking the button.</small><br>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}">Download</a> the complete soruce code.</small>
</div>

<div>
	<h2>
		 Change background image randomly for every load.
	</h2>
	<p>
		Suppose we have three images and we want to change our background image randomly from our collection (3 images). In this case, you can use the javascript random function.
	</p>

<pre class="prettyprint lang-js">
chageBackgroundImageRandomly();

function chageBackgroundImageRandomly(){
	// 3 image
	let allImage = [
		'path-1',
		'path-2',
		'path-3'
	];
	let randomIndex = Math.floor(Math.random() * allImage.length);
	// 0, 1 or 2
	
    myDiv.style.backgroundImage = "url('"+allImage[randomIndex]+"')";
}
</pre>
<small>Here we use the javascript random function to generate a random index Between 0 and our array length.</small><br>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}">Download</a> the complete soruce code.</small>
</div>





@endsection
{{-- end post content --}}





@section('code')
	<br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}" class="btn btn-danger">Download Main Code</a>
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
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_11')}}">Center an image in a div vertically and horizontally</a></li>
</ul>
@endsection
