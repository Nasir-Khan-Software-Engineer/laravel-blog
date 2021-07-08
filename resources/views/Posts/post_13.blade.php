@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to create HTML clickable email signature with social icons</title>

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

<meta property="og:title" content="How to create HTML clickable email signature with social icons" />

<meta property="og:description" content="To make our 'email signature' productive, we need to make it clickable first. Also Putting clickable Social media icons is the best practice." />
<meta property="og:url" content="{{route('Single_Post_13')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_15-03-07-2021-09-13-31pm.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content="To make our 'email signature' productive, we need to make it clickable first. Also Putting clickable Social media icons is the best practice."></meta>

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
<h1 data-id="3" id="post-title">How to create HTML clickable email signature with social icons</h1>
<ul class="post-info">
    <li>Last Updated : 4/07/2021</li>
</ul>


<p class="first-paragraph">
   To make our "email signature" productive, we need to make it clickable first. Also Putting clickable Social media icons is the best practice. <br>

   In this post, we will learn "how to create an HTML clickable email signature with a social icon". <br> <br>
   <b>List of topics we will cover in this post</b>
</p>

<ul>
	<li>✅  What is an email signature?</li>
	<li>✅  How an email signature work?</li>
	<li>✅  Characteristics  of a Professional email signature</li>
	<li>✅  The information we should keep in our email signature</li>
	<li>✅  What is a Clickable email signature?</li>
	<li>✅  How to make an email signature clickable?</li>
	<li>✅  How to create a “Simple and user-friendly email signature”?</li>
	<li>✅  How to use an icon to an email signature?</li>
	<li>✅  How to use an image to the email signature</li>
	<li>✅  How to use CSS to an email signature?</li>
	<li>✅  div or table tag for HTML email signature</li>
	<li>✅  How to make a responsive email signature?</li>
</ul>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_15-03-07-2021-09-13-31pm.gif" alt="HTML clickable email signature">
	<br> <br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>15,'title'=>'HTML-clickable-email-signature-with-social-icons'])}}" class="btn btn-danger">Download Email Signature</a>
</div>


<div>
	<h2>
		 What is an email signature?
	</h2>

	<p>
		Email signature looks like a digital visiting card. In real life, your visiting card contains your personal information like phone number, address, designation, company logo, etc. So an email signature will contain all of your personal information like the visiting card.
	</p>
</div>


<div>
	<h2>
		 How an email signature work?
	</h2>
	<p>
		An email signature like the default text of your email body. If you set your email signature just one time, it will add to your every email’s footer automatically. 
	</p>
</div>

<div>
	<h2>
		 Why should use an email signature?
	</h2>
	<p>
		An email signature is important for us. It proves your professionalism. Also, it will save your time. Because you do not need to write your personal information every time. <br>
		Suppose, every day you email to hundred people now if you add your personal information or your company information(logo, social link, etc) to your email footer, they will easily understand who you are and how professional you are. <br>

		So if you want to be professional use an email signature your email.

	</p>
</div>



<div>
	<h2>
		Characteristics  of a Professional email signature
	</h2>
	<p>
		A professional email signature should be simple and informative. You should keep your main information with a simple design. A professional email signature should have some characteristics like. 
	</p>

	<ul>
		<li>✅ Informative</li>
		<li>✅ Clickable</li>
		<li>✅ Simple and User-friendly design</li>
	</ul>
</div>


<div>
	<h2>
		What is a Clickable email signature?
	</h2>
	<p>
		One of the main characteristics of a professional email signature is clickable features. We must need to make our email signature(website, social medial link, phone, email) clickable so that our clients can easily check the details of us(company) 
	</p>

	<h3>How to make an email signature clickable?</h3>
	<p>
		To make your email signature clickable, <br>
		<small>👉</small> Use HTML anchor tag to make your social media and website clickable. <br>
		<small>👉</small> Use the ‘tel’ prefix to make your phone clickable. <br>
		<small>👉</small> Use the “mailto” prefix to make your email address clickable.
	</p>
	<h3>Code of "Clickable email signatue"</h3>
<pre class="prettyprint lang-html">
&lt;a href="https://insidethediv.com">insideTheDiv&lt;/a>
&lt;a href="tel:+8801637017926">01637017926&lt;/a>
&lt;a href="mailto:contact@insidethediv.com">contact@insidethediv.com&lt;/a>
</pre>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>15,'title'=>'HTML-clickable-email-signature-with-social-icons'])}}">Download</a> a complete email signature for free!</small>
<p>To make a professional clickable email signature please <a class="text-primary" href="/contact">contact</a> us.</p>
</div>


<div>
	<h2>
		A “Simple and user-friendly email signature”
	</h2>
	<p>
		Simple is always best so we should keep our email signature simple. Also, we need to make it user-friendly so that our clients can easily read and memorize our information. 
	</p> <br>
	<p>
		To make it simple and user friendly
	</p>
	<ul>
		<li>✅ Divide it between two parts(vertically or horizontally) one part for image and logo and another part for your information.</li>
		<li>✅ Use Icons (social media, address, phone, email, website).</li>
		<li>✅ Use soft color.</li>
		<li>✅ Use readable fonts.</li>
		<li>✅ Make responsive(small size).</li>
	</ul>

	<h3>How to use an icon to an email signature</h3>
	<p>
		To make our email signature professional and simple we need to use icons. But the problem is we can use any icon library to use icons in our email signature.  That why to solve his problem we can use the image(png) instead of using the raw icon.
	</p>
	<h3>How to use an image to the email signature</h3>
	<p>
		To use images in our email signature, first of all, we need to host the image, so that it shows our client-side easily.
	</p>
	<h3>
		The free and secure image host platform
	</h3>
	<p>There are lots of platforms where you can host your image freely but we suggest to use</p>
	<ol>
		<li>Github</li>
		<li>Google Drive</li>
	</ol>
	<p><b>Note: </b>After uploading the image to your GitHub or google drive make it public and use the image address to your email signature.
</p>
</div>




<div>
	<h2>
		How to use CSS to an email signature?
	</h2>
	<p>
		we know we can apply out CSS external internal and inline and for email signature, most of the platform does not support internal CSS. That's why we need to use inline CSS to create an email signature.
	</p>
</div>



<div>
	<h2>
		div or table tag for HTML email signature
	</h2>
	<p>
		Once Upon A Time HTML table was so popular And using the table tag we created our website or web pages but now in 2021, the table tag is not the most used tag. Because the table tag is not responsive. <br>

		<b>But</b> to create an HTML email signature, our email platform <b>suggests users to use the table tag</b>.
		Because our email signature should be single.
	</p>
	<h3>Code of "HTML email signatue"</h3>
	<pre class="prettyprint lang-html">
&lt;!-- Begin E-mail Signature -->

&lt;table cellpadding="0" cellspacing="0" border="0" style="width: 320px; background: #ebebeb">
	&lt;tr>
		&lt;td valign="top" style="padding:0px; padding-right: 7px; border: 0; width: 40%;">
			&lt;!-- logo or image content -->
		&lt;/td>
		&lt;!-- End td -->

		&lt;td style="padding: 0; padding-left: 12px; width: 60%;">
			&lt;table cellpadding="0" cellspacing="0" border="0" style="margin: 0; padding: 0; width: 100%;">
				&lt;!-- another table-->
			&lt;/table>
		&lt;/td>
		&lt;!-- End td -->
	&lt;/tr>
&lt;!-- End row -->
&lt;/table>
&lt;!-- End E-mail Signature -->
</pre>
<small><a class="text-primary" href="{{route('Download.Page',['id'=>15,'title'=>'HTML-clickable-email-signature-with-social-icons'])}}">Download</a> Complete Source Code Free.</span></small>
</div>






<div>
	<h2>
		How to make a responsive email signature?
	</h2>
	<p>
		We already know that to create email signatures we need to use an HTML table tag instead of a div tag. And the table tag is not responsive, also inline CSS is the best way to apply the style in our signature. <br>

		So the best way to make an email signature responsive is to create a small-sized (horizontally) signature. We can place our extra information vertically.
	</p>
</div>


<div>
	<h2>
		The standard email signature size in pixel
	</h2>
	<p>
		The standard size of an email signature is: <br>
		Width : 300px to 600px,<br>
		Height: 150px to 200px
	</p>

	<p>
		<b>Note:</b> you can increase the size of your email signature based on your clients (who will receive) device size. If your all client use large devices you can use large(width) email signatures. If your clients use large and small size devices we suggest you keep it small horizontally and make it large(if need) vertically.
	</p>
</div>






@endsection
{{-- end post content --}}





@section('code')
	<br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>15,'title'=>'HTML-clickable-email-signature-with-social-icons'])}}" class="btn btn-danger">Download Email Signature</a>
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
