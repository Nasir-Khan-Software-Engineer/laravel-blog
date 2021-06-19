@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>Click on the image to view full size in a popup modal</title>

<meta name="description" content="Viewing the full-size image in a modal after clicking on the thumbnail, is one of the cool features of every website. In this post, we will learn how can create these “onclick popup image” features using HTML CSS and javascript, or jquery.">

<meta name="keywords" content="HTML image popup on click,Modal image popup,on click image popup in javascript,Click on image to open popup jquery,image popup on click jquery,jquery popup image on click,Click on image to view full size html,onclick image popup,image popup on click,
popup image,image popup javascript,jquery image popup,click on image to open popup jquery">

<meta property="og:title" content="Click on the image to view full size in a popup modal" />

<meta property="og:description" content="Viewing the full-size image in a modal after clicking on the thumbnail, is one of the cool features of every website. In this post, we will learn how can create these “onclick popup image” features using HTML CSS and javascript, or jquery." />
<meta property="og:url" content="" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_5-16-06-2021-09-31-55pm.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content="Viewing the full-size image in a modal after clicking on the thumbnail is one of the cool features of every website. In this post, we will learn how can create these “onclick popup image” features using HTML CSS and javascript, or jquery."></meta>

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
<h1 data-id="3" id="post-title">Click on the image to view full size in a  popup modal</h1>
<ul class="post-info">
    <li>Last Updated : 17/06/2021</li>
</ul>


<p class="first-paragraph">
    Viewing the full-size image in a modal after clicking on the thumbnail, is one of the cool features of every website. In this post, we will learn how can create "onclick popup image" features using HTML CSS and jquery.
    Also, I will provide you the complete <a class="text-primary" href="">source code</a>.
</p>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_5-16-06-2021-09-31-55pm.gif" alt="onclick popup image jquery">
</div>
<p> <a class="text-primary" href="{{route('Download.Page',['id'=>5,'title'=>'click-on-the-image-to-view-full-size-in-a-popup-modal'])}}">Download </a>the complete soruce code free!</p>

<h2>
	So to create the onclick popup image modal we need to follow some steps
</h2>

<ol>
	<li>👉 Create a popup modal to view a full-size image after the click.</li>
	<li>👉 Get and set image src from thumbnail image to modal image.</li>
	<li>👉 Add and remove an active class to the thumbnail image.</li>
</ol>




<div class="pt-4">
	<h2>Create a popup modal to view full-size image after the click</h2>
	<p>
		To view an image in full size in a popup modal first we need to create a modal using HTML and CSS javascript or jquery. We can use jquery or javascript but to give some animation easily in our popup modal we need to use jquery.
	</p>

	<h3>The HTML structure of popup modal</h3>
	<p>We already decided that we will show our image on a popup modal, which means our modal will contain an image tag. Also, we will take a close button so that we can close the modal.</p>

	<pre class="prettyprint lang-html">
&lt;!-- // popup modal -->

&lt;div id="show_image_popup">
  &lt;div class="close-btn-area">
    &lt;button id="close-btn">X&lt;/button> &lt;!--     close btn -->
  &lt;/div>
  &lt;div id="image-show-area">
    &lt;img id="large-image" src="" alt=""> &lt;!--     popup imge -->
  &lt;/div>
&lt;/div>
</pre>
	<h3>Desing a popup modal using CSS</h3>
	<p>
		To design our modal we will use CSS position and z-index property so that our modal does not take place in the website’s main content. To keep the modal hide for the first time we will use CSS display none property.
	</p>

	<pre class="prettyprint lang-css">
#show_image_popup{
  position: absolute; /*  so that not take place   */
  top: 50%;
  left: 50%;
  z-index: 1000; /*  adobe all elements   */
  transform: translate(-50%, -50%); /*  make center   */

  display: none; /*  to hide first time   */
}
#show_image_popup img{
  max-width: 90%;
  height: auto;
}
</pre>
<p> <a class="text-primary" href="{{route('Download.Page',['id'=>5,'title'=>'click-on-the-image-to-view-full-size-in-a-popup-modal'])}}">Download </a>the complete soruce code free!</p>


	<h3>Show popup modal after clicking on the image using jquery.</h3>
	<p>To show our popup modal we can use the jquery show() method. But to show popup modal with animation we can use the fadeIn() method.</p>
	
<pre class="prettyprint lang-js">
$(".small-image").click(function(){
	// $("#show_image_popup").fadeIn();
	$("#show_image_popup").show()
})
</pre>

	<h3>hide popup modal after clicking on the close button using jquery</h3>
	<p>To hide our popup modal we can use the jquery hide() method. But to hide popup modal with animation we can use the fadeOut() method.</p>

	<pre class="prettyprint lang-js">
$(".close-btn").click(function(){
	// $("#show_image_popup").fadeOut()
	$("#show_image_popup").hide()
})
</pre>
<br>

	<p><b>Note:</b></p> 
	<ul>
		<li>👉 You can also <a class="text-primary" href="">hide the modal automatically with a time countdown.</a></li>
		<li>👉 If you are familiar with bootstrap you can use the <b>bootstrap modal</b> witch is more easy and smart design.</li>
	</ul>

</div>
{{-- end div --}}







<div class="pt-4">
	<h2>Get and set image src from thumbnail image to modal image</h2>

	<p>To create an “onclick popup image modal” the main idea is getting and setting the src attribute of the image tag. We know we have an image tag on our popup modal so when we will click on our thumbnail image we will get the value of its src attribute then we will set this value to our modal’s image tag.</p>

	<h3>How to get image src attribute value in Jquery</h3>
	<p>Getting an image’s src value in jquery is not like the raw javascript we need to use the attr() method. This method will take the attribute name as a string.</p>
	<pre class="prettyprint lang-js">
var src_value = $("#my_img"”).attr('src');
</pre>

	<h3>How to set image src attribute value in Jquery</h3>
	<p>To Set an image’s src value in jquery we also need to use the attr() method, this time the attr() method will take two parameters one the attributes name and another one is the value you want to set.</p>
	<pre class="prettyprint lang-js">
Var src_value = “my-image.jpg”;
$("#modal_img ").attr('src',src_value);
</pre>
</div> {{-- end div --}}





<div class="pt-4">
	<h2>Add and remove an active class to the thumbnail image using jquery</h2>
	<p>After clicking on the thumbnail image, we need to make the image active by adding an active class. So that you can understand which thumbnail image is currently viewed. In jquery to add a class, we need to use the addClass() method and to remove we need to use the removeClass() method.</p>
	<br>
	<b>Note:</b> <br>
	<ul>
		<li>👉 Make sure you  design your active class</li>
		<li>👉 Also, make sure you remove the class when you close the modal and click on another image.</li>
	</ul>
	<pre class="prettyprint lang-css">
.active{
  filter: blur(5px);
}
</pre>


<pre class="prettyprint lang-js">
$(".small-image").click(function(){
	$(this).addClass('active'); // add active class
	$(".small-image").removeClass('active'); // remove active class from all images
})
</pre>

	<p> <a class="text-primary" href="{{route('Download.Page',['id'=>5,'title'=>'click-on-the-image-to-view-full-size-in-a-popup-modal'])}}">Download </a>the complete soruce code free!</p>
</div>
{{-- end div --}}




<div class="pt-4">
	<h2>Logical code of onclick popup image</h2>
	<pre class="prettyprint lang-js">
$(".small-image").click(function(){

	removeActiveClassFromAllImage(); // this function will remove all image from all small images
	addActiveClass(this_image);  // this function will add active class to this image

	getImageSrc(this_img); // this function will get the src value from this small image
	setSrctoModalImage(this_img_src); // this function will set src to the modal image tag

	showModal(); // will show our modal
})

$(".close-btn").click(function(){
	removeActiveClassFromAllImage(); // will remove all active class
	closeModal(); // will close our modal
})
</pre>
	<p>Watch the <a class="text-primary"  href="">video</a> or  <a class="text-primary" href="{{route('Download.Page',['id'=>5,'title'=>'click-on-the-image-to-view-full-size-in-a-popup-modal'])}}">download</a> the complete source code for <b>free</b>.</p>
</div>
{{-- end div --}}

@endsection
{{-- end post content --}}





@section('code')
<br>
<br>
    <a class="btn btn-danger" href="{{route('Download.Page',['id'=>5,'title'=>'click-on-the-image-to-view-full-size-in-a-popup-modal'])}}" class="btn btn-danger">Download Source Code</a>
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
	<li class="mb-1"><a class="text-primary" href="{{route('Single_Post_1')}}">How Many Ways We Can Select HTML Tag Or HTML DOM Elements In Javascript</a></li>
	<li class="border-top my-1"><a class="text-primary" href="{{route('Single_Post_2')}}">How To Create Popup Modal Or Popup Message Box With Time Countdown In Javascript</a></li>
</ul>
@endsection
