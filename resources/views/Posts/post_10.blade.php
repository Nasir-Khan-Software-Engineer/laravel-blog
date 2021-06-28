@extends('Layouts.Single-Post.Single-Post')
@section('SEO')
<title>How to select CSS pseudo element using javaScript</title>
<meta name="description" content="how can we play with CSS pseudo-element? In this post, I will show you how can we select CSS pseudo-element using javascript.">

<meta name="keywords" content="css pseudo element, select css pseudo element, javascript computed style, select css after before using javascript">


<meta property="og:title" content="How to select CSS pseudo element using javaScript" />

<meta property="og:description" content="how can we play with CSS pseudo-element? In this post, I will show you how can we select CSS pseudo-element(after, before) using javascript." />


<meta property="og:url" content="{{route('Single_Post_10')}}" />

<meta property="og:image" content="https://www.admin.insidethediv.com/assets/img/post/post_12-28-06-2021-06-10-28am.gif" />
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
<h1 data-id="3" id="post-title">How to select CSS pseudo element using javaScript</h1>
<ul class="post-info">
   <li>Last Updated : 28/06/2021</li>
</ul>
<p class="first-paragraph">
   Using javascript we can easily select HTML elements, also we can change the style of an HTML element using javascript easily but how can we play with CSS pseudo-element? In this post, I will show you how can we select CSS pseudo-element(after, before) using javascript.
</p>
<div class="py-3 text-center">
   <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_12-28-06-2021-06-10-28am.gif" alt="select CSS pseudo element using javaScript">
</div>
<div class="pt-3">

<h2>CSS after element</h2>
<pre class="prettyprint lang-css">
//HTML
&lt;div id="box">
   This is box div
&lt;/div>

//CSS
#box{
   width:500px;
   height: 500px;
   border:2px solid red;
   margin:0px auto;
   box-sizing:border-box;
   padding: 15px;
   position:relative;
}
#box::after{
   content:'i m after';
   background:green;
   color:#fff;
   width:100px;
   position:absolute;
   top:-20px;
   right:0;
   font-size: var(--boxAfterFontSize,20px);
}
</pre>
<small>Here, for the font-sise we just used a css variable(boxAfterFontSize). So that we can change the value of the varibale using javascript. <a class="text-primary" href="{{route('Download.Page',['id'=>12,'title'=>'select-css-pseudo-element-using-javascript'])}}">Download</a> the complete source code, for better understanding.</small>
</div>
{{-- end div --}}

<div class="pt-3">
   <h2>
       How to Get CSS pseudo-element style using javascript
   </h2>
   <p >
       CSS pseudo-element is not like a normal element it is a computed element so to get the style of this you can use the <b>getComputedStyle()</b> method, this method will take two parameters one is the main element and the second one is the pseudo-class.
   </p>
   <p class="mt-2" >
       <b><mark>Note:</mark></b>
       To access CSS computed style don’t use any hyphen between two words of a CSS property.
       <br>
      
       element.fontSize  // valid <br>
       element.font-size // not valid <br>
   </p>
</div>
{{-- end div --}}


<div class="pt-3">
   <h2>
       Getting the CSS property of css pseudo element(after) using javascript
   </h2>
   <pre class="prettyprint lang-js">
var box      = document.getElementById("box");
var boxAfter = window.getComputedStyle(box, "::after");
console.log(boxAfter.backgroundColor); // getting the background color
</pre>
<small>Here, we just getting the background color of our box div using javascript. Please <a class="text-primary" href="{{route('Download.Page',['id'=>12,'title'=>'select-css-pseudo-element-using-javascript'])}}">download</a> the complete source code, for better understanding.</small>
</div>
{{-- end div --}}


<div class="pt-3">
   <h2>
       Change(set) the style of CSS pseudo-element using javascript
   </h2>
   <p >
       Changing or setting the style of CSS pseudo-element is a tricky one, actually, you can not do this directly or maybe I do not know the way yet, but I will share a technique with you to do this.
   </p>
   <h3>
       The technique of Changing the style of CSS pseudo-element
   </h3>
   <p >
       Use CSS variable to design your CSS pseudo-element and change the value of the variable using javascript and this will change the style of your CSS pseudo-element.
   </p>
   <p>
       <b>
           Example
       </b>
   </p>
   <pre class="prettyprint lang-css">
 #box::after{
 content: 'this is after';
 background-color: var(--boxAfterBackColor,red);
 position: absolute;
 top: -20px;
 right: 0px;
 font-size: var(--boxAfterFontSize,20px);
}
</pre> <br>
   <pre class="prettyprint lang-js">
let box = document.getElementById('box');
box.style.setProperty('--boxAfterBackColor','green');
box.style.setProperty('--boxAfterFontSize','50px');
</pre>
<small>Here, we changing the value of css after element by changing the variable value using javascript. Please <a class="text-primary" href="{{route('Download.Page',['id'=>12,'title'=>'select-css-pseudo-element-using-javascript'])}}">download</a> the complete source code, for better understanding.</small>

<p>
    <b>
        <mark>
            Note:
        </mark>
    </b>
    <br>
    The <b>Window.getComputedStyle()</b> method returns an object containing the values of all CSS properties of an element, after applying active stylesheets and resolving any basic computation those values may contain.
    The <b>CSSStyleDeclaration.setProperty()</b> method interface sets a new value for a property on a CSS style declaration object.
</p>

</div>
{{-- end div --}}

@endsection
{{-- end post content --}}


@section('code')
   <br>
   <br>
    <a class="btn btn-danger" href="{{route('Download.Page',['id'=>12,'title'=>'select-css-pseudo-element-using-javascript'])}}" class="btn btn-danger">Download Source Code</a>

@endsection
@section('video')
{{-- <iframe id="video_show" class="my-2" width="100%" height="400" src="https://www.youtube.com/embed/QyEx6LEUPv8" title="javascript Unit Converter">
</iframe> --}}
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
  <li class="mb-1"><a class="text-primary" href="{{route('Single_Post_1')}}">How Many Ways We Can Select HTML Tag Or HTML DOM Elements In Javascript</a></li>
  <li class="border-top my-1"><a class="text-primary" href="{{route('Single_Post_2')}}">How To Create Popup Modal Or Popup Message Box With Time Countdown In Javascript</a></li>
</ul>
@endsection