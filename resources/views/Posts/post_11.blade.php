@extends('Layouts.Single-Post.Single-Post')
@section('SEO')
<title>Center an image in a div vertically and horizontally</title>
<meta name="description" content="All most in every web project we need to make image center vertically and horizontally. In this post, we will learn four ways to make an image center in a div..">

<meta name="keywords" content="center vertically CSS,
center horizontally CSS,
,center an image in a div, 
center an image CSS, 
center image in div horizontally, 
vertically center image in div, 
center image CSS">


<meta property="og:title" content="Center an image in a div vertically and horizontally" />

<meta property="og:description" content="All most in every web project we need to make image center vertically and horizontally. In this post, we will learn four ways to make an image center in a div." />


<meta property="og:url" content="{{route('Single_Post_11')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_13-28-06-2021-10-06-16pm.gif" />
{{-- twitter card description --}}
<meta name="twitter:card" content="">
</meta>
@endsection
@section('top-ad')
{{-- 
<div  class="pb-3 ad-image">
   <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div>
--}}
@endsection
@section('cover-image')
{{-- <img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript"> --}}
{{-- <img src="https://via.placeholder.com/1020x400" alt=""> --}}
@endsection
{{-- start post content --}}
@section('main-content')
<h1 data-id="3" id="post-title">Center an image in a div vertically and horizontally</h1>
<ul class="post-info">
   <li>Last Updated : 29/06/2021</li>
</ul>
<p class="first-paragraph">
   All most in every web project we need to make image center vertically and horizontally. In this post, we will learn four ways to make an image center in a div.
</p>
<div class="py-3 text-center">
   <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_13-28-06-2021-10-06-16pm.gif" alt="Center image vertically and horizontally">
</div>


<div class="pt-3">
<h2>HTML center image in div</h2>
<p>
  To make an image center in a div using HTML first of all we need to take a wrapping div and inside the wrapping div, we will keep our image.
</p>
<pre class="prettyprint lang-html">
&lt;div id="image-container">
  &lt;img src="https://via.placeholder.com/100x100" alt="">
&lt;/div>
</pre>

</div>
{{-- end div --}}


<div class="pt-3">
<h2>Center image CSS</h2>
<p>
  To center an image we need to use CSS, and there are different ways to make an image center.
In this article, we will use the CSS.

<ol>
  <li>Margin</li>
  <li>Position</li>
  <li>Line height</li>
</ol>
Properties to make an image center in the div.
</p>
</div>
{{-- end div --}}

<div class="pt-3">
<h2>CSS Center image horizontally</h2>
<p>
  To make an image center horizontally in a div we will use the CSS <b>text-align</b> property in the wrapping div. We can also use the CSS <b>margin</b> property to our image to make it center horizontally.</p>
<p><b>Note:</b> Our wrapping div should have fixed width.</p>

<h3>CSS Center image horizontally uisng the css text-align property</h3>
<pre class="prettyprint lang-css">
#image-container{
  width:100%;
  text-align:center;
}
</pre>

<h3>CSS Center image horizontally uisng the css margin property</h3>
<pre class="prettyprint lang-css">
#image-container{
  width:100%;
}
#image-container img{
  margin: 0px auto;
}
</pre>

</div>
{{-- end div --}}




<div class="pt-3">
<h2>CSS center image vertically</h2>
<p>
  To center an image vertically we can use CSS <b>position</b> property or CSS <b>line-height</b> property. We can also use CSS <b>margin</b> property technically to make an image center vertically in a div.

</p>

<h3>Center an image vertically using the CSS position property.</h3>
<pre class="prettyprint lang-css">
#image-container{
  width: 500px;
  height: 400px;
  border: 2px solid red;
  position: relative;
}
#image-container img{
  position:absolute;
  top:50%;
  transform:translate(0%,-50%);
}
</pre>
<small><b>Note:</b> wrapping div should have a fixed width and height.</small>

<h3>Center an image vertically using the CSS line-height property.</h3>
<pre class="prettyprint lang-css">
#image-container{
  width: 500px;
  height: 400px;
  border: 2px solid red;
  line-height: 500px; 
  text-align:center; 
}
</pre>
<small><b>Note:</b>  just use the same height and line-height in the wrapping div.</small>

<h3>Center an image vertically using the CSS margin property.</h3>
<pre class="prettyprint lang-css">
#image-container{
  width: 500px;
  height: 400px;
  border: 2px solid red;
}
#image-container img{
   display:block;
   margin: calc(50% - 100px) 0px;
}
</pre>
<small><b>Note:</b>  we need to use the margin-top and margin-bottom using the <span class="text-primary">CSS calc function</span>.</small>

</div>
{{-- end div --}}


<div class="pt-3">
<h2>Center image in div vertically and horizontally</h2>
<p>
  We can make an image center vertically and horizontally using CSS position line-height and margin property.
</p>

<h3>Center image vertically and horizontally using line-height and text-align property.</h3>
<pre class="prettyprint lang-css">
#image-container{
  width: 500px;
  height: 400px;
  border: 2px solid red;
  line-height: 500px; 
  text-align:center; 
}
</pre>


<h3>Center image vertically and horizontally using margin property.</h3>
<pre class="prettyprint lang-css">
#image-container{
  width: 500px;
  height: 400px;
  border: 2px solid red;
}
#image-container img{
   display:block;
   margin: calc(50% - 100px) auto;
}
</pre>


<h3>Center image vertically and horizontally using position property.</h3>
<pre class="prettyprint lang-css">
#image-container{
  width: 500px;
  height: 400px;
  border: 2px solid red;
  position: relative;
}
#image-container img{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
</pre>

</div>
{{-- end div --}}









@endsection
{{-- end post content --}}


@section('code')
  
@endsection
@section('video')
<iframe id="video_show" class="my-2" width="100%" height="400" src="https://www.youtube.com/embed/tDy_Sf_dvZo" title="how to center an image in html">
</iframe>
@endsection
@section('bottom-ad')
{{-- 
<div  class="pb-3 ad-image">
   <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div>
--}}
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