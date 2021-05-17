@extends('Layouts.master')
@section('seo')
<title>This is sinle Post</title>
@endsection
@section('main-container')
<section class="medium-gap single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-post">
                                <div class="post-image">
                                    <img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript">
                                </div>
                                <div class="down-content">
                                    <h1>How to catch CSS pseudo element using javaScript</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>
                                    <p class="first-paragraph">
                                        Using javascript we can easily catch HTML elements, also we can change the style of an HTML element using javascript easily but how can we play with CSS pseudo-element? In this post, I will show you how can we catch CSS pseudo-element using javascript.
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
                                    <blockquote>” Bicycle rights keytar meggings kickstarter messenger bag dreamcatcher crufix iceland bitters single-origin coffee. “</blockquote>
                                    --}}
                                    <h2>
                                        Now Get CSS pseudo-element style using javascript
                                    </h2>
                                    <p class="first-paragraph">
                                        CSS pseudo-element is not like a normal element it is a computed element so to get the style of this you can use the <b>getComputedStyle()</b> method, this method will take two parameters one is the main element and the second one is the pseudo-class.
                                    </p>
                                    <p class="first-paragraph">
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
                                   		    Live Example of "how to catch  catch CSS pseudo element using javaScript"
                                   		</h2>
                                   		<script async src="//jsfiddle.net/FreeSourceCodeBD/0xrqb5ua/10/embed/html,css,js,result/dark/"></script>
                                   	</div>


                                    <h2>
                                        Change Style of CSS pseudo-element using javascript
                                    </h2>
                                    <p class="first-paragraph">
                                        Changing the style of CSS pseudo-element is a tricky one, actually, you can not do this directly or maybe I do not know the way yet, but I will share a technique with you to do this.
                                    </p>
                                    <h3>
                                        The technique of Changing the style of CSS pseudo-element
                                    </h3>
                                    <p class="first-paragraph">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="about-author">
                                <div class="author-image">
                                    <img src="http://placehold.it/140x140" alt="">
                                </div>
                                <div class="right-content">
                                    <h6>Nasir Khan</h6>
                                    <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut shoreditch freegan kistrater selfies.</p>
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <h2>Comments</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
@endsection