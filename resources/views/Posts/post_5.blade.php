@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>A Responsive Dropdown menu with Submenu</title>

<meta name="description" content="A responsive navbar or responsive menu is the most common essential feature of every website. We also call it as Humbarger menu. In this post, we will learn how can we create a responsive menu with dropdown and submenu.">

<meta name="keywords" content="responsive dropdown menu with submenu,html dropdown menu,responsive menu jquery,css dropdown menu,dropdown menu,hamburger menu,responsive hamburger menu,responsive menu,how to add subminu">

<meta property="og:title" content="A Responsive Dropdown menu with Submenu" />

<meta property="og:description" content="A responsive navbar or responsive menu is the most common essential feature of every website. We also call it as Humbarger menu. In this post, we will learn how can we create a responsive menu with dropdown and submenu.." />
<meta property="og:url" content="{{route('Single_Post_5')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_6-18-06-2021-11-27-54am.gif" />

{{-- twitter card description --}}
<meta name="twitter:card" content=""></meta>

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
<h1 data-id="3" id="post-title">A Responsive Dropdown menu with Submenu</h1>
<ul class="post-info">
    <li>Last Updated : 20/06/2021</li>
</ul>


<p class="first-paragraph">
   A responsive navbar or responsive menu is the most common essential feature of every website. We also call it as Humbarger menu. In this post, we will learn how can we create a responsive menu with dropdown and submenu.
</p>

<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_6-18-06-2021-11-27-54am.gif" alt="Responsive Dropdown menu with Submenu">

	<br>
	<br>
	<a class="btn btn-danger" href="{{route('Download.Page',['id'=>6,'title'=>'a-responsive-dropdown-menu-with-submenu'])}}" class="btn btn-danger">Download Source Code</a>
	
</div>



<div class="pt-4">
	<h2>What is Responsive Menu</h2>
	<p>
		In web design, we called a design responsive if a design is looking good and user-friendly for all devices. So a responsive menu is a menu that is user-friendly for all devices (Desktop, Laptop, Mobile, etc).
	</p>
</div>
{{-- end div --}}


<div class="pt-4">
	<h2>Why we need responsive Menu</h2>
	<p>
		Approximately Over 50 percents of internet users use the internet using mobile phones and 46 percent of users use the internet using desktops and the rest 4% use other devices. So we need a responsive menu so that all users can easily use our website. Also to rank in the search engines (google, bing, etc) we need a responsive menu because they highly recommend this.
	</p>
</div>
{{-- end div --}}




<div class="pt-4">
	<h2>what is the hamburger menu?</h2>
	<p>
		The hamburger menu is another name of a responsive menu. We called a responsive menu is Hamburger menu because to create a responsive menu we create an icon (three vertical bar) that look like a hamburger.
	</p>
	<div class="py-3 text-center">
		<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_6_2-19-06-2021-09-27-51pm.jpg" alt="hamburger menu">
	</div>

</div>
{{-- end div --}}



<div class="pt-4">
	<h2>The Algorithm of creating a responsive menu</h2>
	<ol>
		<li>Design the menu for large device</li>
		<li>Change the design using CSS media query for mobile-friendly design.</li>
		<li>Take an icon(hide in large devices and show in small devices) to show and hide the menu on mobile devices using jquery.</li>
	</ol>
</div>
{{-- end div --}}

<div class="pt-4">
	<h2>HTML responsive menu</h2>
	<pre class="prettyprint lang-html">
&lt;nav>
	&lt;icon-for-show-hide>&lt;/icon-for-show-hide> // will show only mobile
	&lt;logo>
		// a logo
	&lt;logo>
	&lt;menu>
		&lt;links>
			// all links
		&lt;/links>
		&lt;social-icons>
			// all social icons
		&lt;/social-icons>
	&lt;/menu>
&lt;/nav>
	</pre>
	<p class="py-2">
		To create menu links we can use an HTML list tag and inside the list tag, we will keep our link tag.
	</p>

	<pre class="prettyprint lang-html">
&lt;memu>
	&lt;ul>
		&lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
		&lt;li>&lt;a>Link 2&lt;/a>&lt;/li>
		&lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
		&lt;li>&lt;a>Link 4&lt;/a>&lt;/li>
	&lt;/ul>
&lt;/menu>
	</pre>
	<p class="py-3">
		For social icons, we can also use an HTML list tag
	</p>

	<pre class="prettyprint lang-html">
&lt;social-icons>
	&lt;ul>
		&lt;li>&lt;a>icon 1&lt;/a>&lt;/li>
		&lt;li>&lt;a>icon 2&lt;/a>&lt;/li>
		&lt;li>&lt;a>icon 3&lt;/a>&lt;/li>
		&lt;li>&lt;a>icon 4&lt;/a>&lt;/li>
	&lt;/ul>
&lt;/social-icons>
	</pre>
	<p class="mt-2"><a class="text-primary" href="{{route('Download.Page',['id'=>6,'title'=>'a-responsive-dropdown-menu-with-submenu'])}}">Download</a> the complete source code for free!</p>
</div>

<div class="pt-4">

	<h2>HTML dropdown menu</h2>
	<p class="py-2">
		To create a dropdown menu we can take another HTML list tag inside the initial list tag.
	</p>
	<pre class="prettyprint lang-html">
&lt;memu>
	&lt;ul>
		&lt;li>&lt;a>Link 1&lt;/a>&lt;/li>

		&lt;parenti>
			&lt;a>Link 2  &lt;span>an icon&lt;/span> &lt;/a>
			&lt;childs>
				&lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
				&lt;li>&lt;a>Link 2&lt;/a>&lt;/li>
				&lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
				&lt;li>&lt;a>Link 4&lt;/a>&lt;/li>
			&lt;/childs>
		&lt;/parent>

		&lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
		&lt;li>&lt;a>Link 4&lt;/a>&lt;/li>
	&lt;/ul>
&lt;/menu>
	</pre>
</div>

<div class="pt-4">

	<h2>HTML dropdown menu with submenu</h2>
	<p class="py-2">
		For multilabel we can take another list inside the child list.
	</p>
	<pre class="prettyprint lang-html">
&lt;memu>
	&lt;ul>
		&lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
		&lt;parenti>
			&lt;a>Link 2  &lt;span>an icon&lt;/span> &lt;/a>
			&lt;childs>
				&lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
				&lt;li>&lt;a>Link 2&lt;/a>&lt;/li>
				&lt;parent>
					&lt;childs>
						&lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
						&lt;li>&lt;a>Link 2&lt;/a>&lt;/li>
					&lt;/childs>
				&lt;/parent>
				&lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
			&lt;/childs>
		&lt;/parent>

		&lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
		&lt;li>&lt;a>Link 4&lt;/a>&lt;/li>
		&lt;li>&lt;a>Link 5&lt;/a>&lt;/li>
	&lt;/ul>
&lt;/menu>
	</pre>
	<p class="mt-2"><a class="text-primary" href="{{route('Download.Page',['id'=>6,'title'=>'a-responsive-dropdown-menu-with-submenu'])}}">Download</a> the complete source code for free!</p>

</div>

<div class="pt-4">
	<h2>Design a responsive menu for large device</h2>
	<p>We will keep our logo on the left and links and social icons on the right side of the nav so we can divide our full nav into two-part.</p>
	<pre class="prettyprint lang-css">
.icon-for-show-hide{
	Display: none; // for hide
}
.logo{
	Width: 20%;
	Float: left;
}
.menu{
	Width: 80%;
	Float: left; /** we can use right also **/
}
	</pre>
	<p><b>Note:</b> we will show icon-for-show-hide on the mobile device.</p>

	<p>
		Inside the menu, we will keep out links on the left side and the social icon on the right side so again we can divide our menu area into two-part.
	</p>
	<pre class="prettyprint lang-css">
.links{
	Width: 70%;
	Float: left;
}
.social-icon{
	Width: 30%;
	Float: left;
}
	</pre>
<p><b>Note: </b>we will show the child after the click on the parent using jquery.</p>
</div>

<div class="pt-4">
	<h2>Design a responsive menu for For Mobile devices</h2>
	<p>We will make our logo, menu, and social link area width 100 percent so that all areas take palaces vertically. Also, we will show our menu toggle(show and hide) icon.</p>

	<pre class="prettyprint lang-css">
nav{
	Position: relative;
}
.icon-for-show-hide{
	Display: block;
	Position: absolute:
	Top: 10px;
	Right: 10px;
}
.logo{
	Width: 100%;
}
.menu{
	Width: 100%;
}
.links{
	Width: 100%;
}
.social-icons{
	Width: 100%;
}
</pre>
<p class="mt-2"><a class="text-primary" href="{{route('Download.Page',['id'=>6,'title'=>'a-responsive-dropdown-menu-with-submenu'])}}">Download</a> the complete source code for free!</p>
</div>



<div class="pt-4">
	<h2>Show and hide responsive menu with jquery</h2>
	<pre class="prettyprint lang-js">
// show and hide the complete menu
$(‘icon-for-show-hide’).click(function(){
	$(‘menu’).slideToggle(‘fast’);
});
	</pre>
</div>


<div class="pt-4">
	<h2>Show and hide the children of dropdown</h2>
	<pre class="prettyprint lang-js">
$("parent a").click(function(e){
 		
 	var childs = $(this).next('childs');
 	$(childs[0]).slideToggle("fast");
	
	// add a rotate clase for icon rotation.
 	var icon = $(this).find('arrow-icon');
 	$(icon[0]).toggleClass('rotate');

 	e.preventDefault();
 })
	</pre>
	<p class="mt-2"><a class="text-primary" href="{{route('Download.Page',['id'=>6,'title'=>'a-responsive-dropdown-menu-with-submenu'])}}">Download</a> the complete source code for free!</p>
</div>






@endsection
{{-- end post content --}}





@section('code')
<br>
<br>
<a class="btn btn-danger" href="{{route('Download.Page',['id'=>6,'title'=>'a-responsive-dropdown-menu-with-submenu'])}}" class="btn btn-danger">Download Source Code</a>
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
