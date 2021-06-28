@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to select CSS pseudo element using javaScript</title>
<meta name="description" content="Using javascript we can easily select HTML elements, also we can change the style of an HTML element using javascript easily but how can we play with CSS pseudo-element? In this post, I will show you how can we select CSS pseudo-element using javascript.">
<meta name="keywords" content="HTML, CSS, JavaScript, php">
@endsection


@section('top-ad')
<div  class="pb-3 ad-image">
    <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div>
@endsection







@section('cover-image')
{{-- <img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to select CSS pseudo element using javaScript"> --}}
{{-- <img src="https://via.placeholder.com/1020x400" alt=""> --}}
@endsection
{{-- start post content --}}
@section('main-content')
<h1 data-id="2" id="post-title">How to select CSS pseudo element using javaScript</h1>
<ul class="post-info">
    <li>Last Updated : 01 Jun, 2021</li>
</ul>
<p class="first-paragraph">
    Using javascript we can easily select HTML elements, also we can change the style of an HTML element using javascript easily but how can we play with CSS pseudo-element? In this post, I will show you how can we select CSS pseudo-element using javascript.
</p>
<br>
<b>
    Example:
</b>
<br>
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
{{-- 
<blockquote>” Bicycle rights keytar meggings kickstarter messenger bag dreamselecter crufix iceland bitters single-origin coffee. “</blockquote>
--}}
<h2>
    Now Get CSS pseudo-element style using javascript
</h2>
<p >
    CSS pseudo-element is not like a normal element it is a computed element so to get the style of this you can use the <b>getComputedStyle()</b> method, this method will take two parameters one is the main element and the second one is the pseudo-class.
</p>
<p class="mt-2" >
    <b><mark>Note:</mark></b>
    To access CSS computed style don’t use any hyphen between two words of a CSS property.
    <br>
    <b>Example: </b> <br>
    element.fontSize  // valid <br>
    element.font-size // not valid <br>
</p>
<h2>
    Get css property of css pseudo elements (after) using javascript
</h2>
<pre class="prettyprint lang-js">
    var box      = document.getElementById("box");
    var boxAfter = window.getComputedStyle(box, "::after");
    console.log(boxAfter.backgroundColor); // geting the background color
</pre>
<div class="live-example">
    <h2>
        Live Example of "how to select  select CSS pseudo element using javaScript"
    </h2>
    <script async src="//jsfiddle.net/FreeSourceCodeBD/0xrqb5ua/10/embed/html,css,js,result/dark/"></script>
</div>
{{-- // single post bottom ad --}}
@include('Layouts.ad.post-mid')
{{-- // end single post bottom ad --}}
<h2>
    Change Style of CSS pseudo-element using javascript
</h2>
<p >
    Changing the style of CSS pseudo-element is a tricky one, actually, you can not do this directly or maybe I do not know the way yet, but I will share a technique with you to do this.
</p>
<h3>
    The technique of Changing the style of CSS pseudo-element
</h3>
<p >
    Use CSS variable to design your CSS pseudo-element and change the value of the variable using javascript and this will change the style of your CSS pseudo-element.
</p>
<br>
<p>
    <b>
        Example:
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
</pre>
<pre class="prettyprint lang-js">
    let box = document.getElementById('box');
    box.style.setProperty('--boxAfterBackColor','green');
    box.style.setProperty('--boxAfterFontSize','50px');

</pre>
<br>
<p class="last-paragraph">
    <b>
        <mark>
            Note:
        </mark>
    </b>
    <br>
    The <b>Window.getComputedStyle()</b> method returns an object containing the values of all CSS properties of an element, after applying active stylesheets and resolving any basic computation those values may contain.
    The <b>CSSStyleDeclaration.setProperty()</b> method interface sets a new value for a property on a CSS style declaration object.
</p>
@endsection
{{-- end post content --}}


@section('code')
    <a href="{{route('Download.Page',['id'=>1,'title'=>'How to select CSS pseudo element using javaScript'])}}" class="btn btn-danger">Download Source Code</a>
@endsection

@section('video')
    <iframe id="video_show" class="my-2" width="100%" height="400" src="https://www.youtube.com/embed/mpab1b4jvXg">
     </iframe>
@endsection































@section('bottom-ad')
<div  class="pb-3 ad-image">
    <img  src="https://via.placeholder.com/1020x100" alt="Bottom ad">
</div>
@endsection



@section('author')
    @include('Layouts.Author.Author-Nasir')
@endsection

@section('comment')
    @include('Layouts.comment')
@endsection


@section('releted-post')
Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae inventore, dicta minima cumque nostrum expedita deserunt vitae nihil consectetur itaque maiores possimus ad, odit suscipit accusamus blanditiis, incidunt! Quam, dicta culpa repudiandae eius delectus consequuntur sed est id ut eveniet, odit maxime corrupti accusantium accusamus minima voluptates, doloremque tempore voluptatum debitis sapiente, deleniti! Nam quisquam officiis ea dolorem tenetur expedita labore beatae amet ullam necessitatibus. Labore quisquam, ab nesciunt adipisci quam reprehenderit dolore ex? Vitae repellendus corporis doloribus laboriosam possimus quo porro, officia blanditiis ipsum veritatis culpa asperiores, iste eos. Alias id, quae sequi, rerum commodi beatae. Laudantium, necessitatibus?
@endsection
