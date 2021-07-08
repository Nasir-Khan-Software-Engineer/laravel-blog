@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>Create a Responsive website using only bootstrap 5</title>

<meta name="description" content="can we build a website using only bootstrap-5 without any raw CSS?  The answer is yes,  using only the bootstrap-5 we can create a complete Responsive website.">

<meta name="keywords" content="template for website,
templates bootstrap,
bootstrap template,
template for bootstrap,
bootstrap responsive website,
bootstrap 5,
responsive website">

<meta property="og:title" content="Create a Responsive website using only bootstrap 5" />

<meta property="og:description" content="can we build a website using only bootstrap-5 without any raw CSS?  The answer is yes,  using only the bootstrap-5 we can create a complete Responsive website." />
<meta property="og:url" content="{{route('Single_Post_15')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_17_1-07-07-2021-10-23-59am.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content="can we build a website using only bootstrap-5 without any raw CSS?  The answer is yes,  using only the bootstrap-5 we can create a complete Responsive website."></meta>

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
<h1 data-id="3" id="post-title">Create a Responsive website using only bootstrap 5</h1>
<ul class="post-info">
    <li>Last Updated : 7/07/2021</li>
</ul>


<p class="first-paragraph">
   You may already know what is Bootstrap and how can you use it.  But now the question is can we build a website using only bootstrap without any raw CSS or JavaScript.  the answer is yes,  using the only Bootstrap we can create a complete Responsive website.
</p>
<p>
	In this post, I will share with you or provide you a complete guideline to build a Responsive website using only Bootstrap 5.
</p>
<p>
	we know bootstrap Framework contains a lot of things but to build a simple complete website we do not need all of this,  so let's decide first which things or which technique of bootstrap we will use in this tutorial.
</p>
<br>
<p><b>We will use</b></p>
<ul>
	<li>✅  Bootstrap layout system to make our site responsive.</li>
	<li>✅  Bootstrap navigation system with dropdown.</li>
	<li>✅  Bootstrap carousel slider.</li>
	<li>✅  Bootstrap card design.</li>
	<li>✅  Bootstrap input field design that means contact form.</li>
	<li>✅  Bootstrap accordion.</li>
	<li>✅  Bootstrap modal box.</li>
</ul>
<br>
<h2>list of sections or features of our website</h2>
<p>
	Before start building our website let’s discuss about the number of section or features we will create or build in our website. On our computer website, we will build  8 sections.
</p>
<ul>
	<li>👉 <a href="#our_head_section">Head section.</a></li>
	<li>👉 <a href="#our_about_section">About section.</a></li>
	<li>👉 <a href="#our_service_section">Service section.</a></li>
	<li>👉 <a href="#our_team_section">Team section.</a></li>
	<li>👉 <a href="#our_feedback_section">Feedback section.</a></li>
	<li>👉 <a href="#our_faq_section">Frequently asked questions action section.</a></li>
	<li>👉 <a href="#our_contact_section">Contact action section.</a></li>
	<li>👉 <a href="#our_footer_section">Footer action section.</a></li>
</ul>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17_1-07-07-2021-10-23-59am.gif" alt="Bootstrap-5 website">
	<br> <br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
</div>



<div id="our_head_section">
	<h2>Header Section Design</h2>
	<p>
		The header section is one of the main parts of any website because in this part we keep our navigation or our slogan.  and that's why we will divide the header section into 3 parts.
	</p>
	<ol>
		<li>Top section</li>
		<li>Navigation section</li>
		<li>And slider section</li>
	</ol>

	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17_2-07-07-2021-10-27-54am.png" alt="Header Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>

	<h3>Top Section</h3>
	<p>
		In the heading top section, you will keep two information one is our email address and another one is our phone number.  so we can divide the section into two parts one is the left part for your email address and another n is it right part for our phone number. <br>

		So the idea is we will take a row and we will divide this into two-column. To make this section responsive we will use the <var>call-12</var> class so that each column takes full width on our mobile device.
	</p>
	<h3>Navigation part</h3>
	<p>
		The bootstrap navigation system is already responsive so to use this navigation system will just need to customize the navigation. <br>
		Now for this website, you will use our brand or logo on the left side and we will keep our navigation link to the center and our social icon to the right side.  we will also use the dropdown button. <br>
		You already know that our website will be a single-page application that's why our navigation link should contain the section ID as a target.
	</p>
	<h3>Slider Section</h3>
	<p>
		To build our slider section we will use the bootstrap carousel slider system this is not so hard things you just need to copy the whole code from the bootstrap documentation then use our image as a slider also we need to change or use our own id as a target.
	</p>
</div>
{{-- // end head section --}}

<div id="our_about_section">
	<h2>About Section Desing</h2>
	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17_3-07-07-2021-10-27-59am.JPG" alt="About Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>
	<p>
		On the about section, we will keep company details as about text and an image with some social-media links. So we can divide our about section into <b>two columns</b> for computer devices using the <var>call-lg-5 and col-lg-7</var> classes. And on our left column, we will use keep an image and on our right column we will keep our about details and title and social-meadia links icons. <br>
		We will also use the <var>call-12</var> class in each column so that each column take 100% width on a mobile device. <br>
		Also to make our title beautiful we will use the bootstrap <var>display-6 </var>class.
	</p>
</div>
{{-- end about section --}}

<div id="our_service_section">
	<h2>Service Section Desing</h2>
	<div class="text-center py-3">
		<img class="img-fluid" width="50%" src="https://www.admin.insidethediv.com/assets/img/post/post_17 (7)-07-07-2021-10-27-47am.JPG" alt="services popup Modal of Bootstrap-5 website">

		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>
	
	<p>
		In our service section, we will show our all services like web design development every search acceptor using the bootstrap card.
	</p>
	<p>
		Here we have its services so show in each row we will show four services that means you will take Aero and you will divide this row into 4 columns using call LG E3 Plus.  we will also college 12 class in each column so that it services take 100% wide in mobile devices to make the section responsive
	</p>
	<p>
		In our every card we will show an icon or image then our title of the service than a short description and a quotation button.
	</p>
	<p>
		To get a quotation when someone clicks on the button we will show a modal that means bootstrap modal and inside the modal, you will design a contact form so that anyone can fulfill the contact form and submit it to get a quote.
	</p>
	<p>
		<b>Note:</b> We can keep our models code in any place inside the HTML tag, in this case, we will keep for model code just at the bottom of the HTML tag.
	</p>
</div>
{{-- end about section --}}


<div id="our_team_section">
	<h2>Team Section Desing</h2>
	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17 (1)-07-07-2021-10-26-48am.JPG" alt="Team Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>

	<p>
		To build a team section using bootstrap we will use the bootstrap card again and in this case, we will show our 3 team members so we will take a row and then divide this row into three columns and each column will contain a card to display the image, name, profession, and social icon of our team member.
	</p>
</div>
{{-- // end team section --}}

<div id="our_feedback_section">
	<h2>Feedback Section Desing</h2>
	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17 (2)-07-07-2021-10-27-17am.JPG" alt="Feedback Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>

	<p>
		To build a responsive feedbacks showing system using bootstrap you will use bootstrap quotation design.  also, we will use the text-center class so that our quotation image and name of the client take place in the center of the row.
	</p>
</div>
{{-- // end feedback section --}}


<div id="our_faq_section">
	<h2>Frequently Asked Question(FAQ)  section Design</h2>
	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17 (3)-07-07-2021-10-27-23am.JPG" alt="FAQ Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>

	<p>
		FAQ section or frequently asked questions section is one of the common features of every website. This project or in this website will also create a frequently asked question using the <span class="text-primary">bootstrap accordion</span>. <br> 
		Bootstrap accordion is not so hard thing but if we use multiple bootstrap accordions on the same page then it is tricky because we need to change the targeted ID of every accordion.
	</p>
</div>
{{-- // faq section --}}


<div id="our_contact_section">
	<h2>Contact us section Design</h2>
	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17 (4)-07-07-2021-10-27-34am.JPG" alt="Contact Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>

	<p>
		We will design our contact us section just like our about us section.  we will take a row and divide it into two parts <var>(col-lg-5 and col-lg-7)</var> one is for our image and another is for our contact form and insert the contact form column we will use the Bootstrap input field, To give some information to our input field’s placeholder you will use floating form design. 
	</p>
</div>
{{-- // end contact section --}}




<div id="our_footer_section">
	<h2>Footer Section Design</h2>
	<div class="text-center py-3">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17 (5)-07-07-2021-10-27-40am.JPG" alt="Footer Section of Bootstrap-5 website">
		<br> <br>
		<a class="btn btn-danger" href="{{route('Download.Page',['id'=>17,'title'=>'a-complete-website-using-only-bootstrap-5'])}}" class="btn btn-danger">Download Full Source Code</a>
	</div>

	<p>
		In this section we will take 3 rows and every row will contain a single column so that we can easily Centre is item and insert the three-row the first row will take a button so that by clicking this button you can easily go to the top then the second row will take simply a contact form For our newsletter. Then the last row will take some social icons so that anyone can follow us. 
	</p>
</div>
{{-- // Footer section --}}


@endsection
{{-- end post content --}}





@section('code')
{{-- 	<br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>16,'title'=>'how-to-change-background-image-using-javascript'])}}" class="btn btn-danger">Download Main Code</a> --}}
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
