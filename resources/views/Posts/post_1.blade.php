@extends('Layouts.Single-Post.Single-Post')

@section('SEO')
<title>How to catch CSS pseudo element using javaScript</title>
<meta name="description" content="">
<meta name="keywords" content="">
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
<h1 data-id="3" id="post-title">How many ways we can select HTML tag or HTML DOM elements in javascript</h1>
<ul class="post-info">
    <li>Last Updated : 09/06/2021</li>
</ul>


<p class="first-paragraph">
    Using javascript we can select and change any HTML tag or HTML DOM> element easily. And to select HTML tag or DOM elements javascript provide us different, different ways. <br>
    In this post, we will learn how many ways we can select our HTML tag or HTML DOM element in javascript. Also, I will give some suggestions so that you can understand when which way you should use to select the <abbr title="Hypertext Markup Language">HTML</abbr> tag or HTML <abbr title="Document Object Model">DOM</abbr> elements.
</p>

<h2>Six ways of selecting  HTML tag or HTML DOM elements in javascript</h2>
<ol>
	<li><a rel="nofollow" href="#by_tag_name">👉 Select HTML DOM elements by tag name.</a></li>
	<li><a rel="nofollow" href="#by_class_name">👉 Select HTML DOM elements by class name.</a></li>
	<li><a rel="nofollow" href="#by_id">👉 Select HTML DOM element by id.</a></li>
	<li><a rel="nofollow" href="#by_name_attr">👉 Select HTML DOM elements by the name attribute.</a></li>
	<li><a rel="nofollow" href="#multiple_element">👉 Select multiple HTML DOM elements like the CSS selecting way.</a></li>
	<li><a rel="nofollow" href="#single_element">👉 Select a single HTML DOM element like the CSS selecting way.</a></li>
</ol>


<h3>What is DOM in JavaScript?</h3>

<p>
	The word DOM stands for <b>Document Object Model</b>, where a web page is called a Document, and all tags inside the document(web page) are an object and the tree structure of every object(tag) is the model. <br>

	So a tree structure(Model) of all HTML tags(Object) of our web page(Document) is called Document Object Model(DOM).
	This three representation helps javascript to access HTML tag easily.
</p>
<div class="py-3 text-center">
	<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/1623273318.jpg" alt="html DOM in javascript">
</div>

<div id="by_tag_name" class="py-2">
	<h2>Select HTML DOM elements by tag the name, using the javascript "getElementsByTagName()" method.</h2>
	<p>
		We know In CSS we can select HTML DOM element by tag name, in javascript we can also select HTML DOM element by HTML tag name using the "getElementsByTagName()" method. This method will take the tag name as a string and return an <a class="text-primary" rel="dofollow" href="">HTMLCollection</a> of all the selected tags. <br>

		Suppose in our website we have three h3 tags, now if we apply any CSS to the h3 tag it will change all three tags, so just like the CSS, javascript getElementsByTagName() method will give us all three tag as an <a class="text-primary" rel="dofollow" href="">HTMLCollection</a> which is live in HTML DOM, and from this collection, we can select a single item just like an array.
	</p>
<br>
<span><b>Example:</b></span>
<pre class="prettyprint lang-js">
//HTML
&lt;h3>This is heading 1&lt;/h3>
&lt;h3>This is heading 2&lt;/h3>
&lt;h3>This is heading 3&lt;/h3>

//js
var all_heading = document.getElementsByTagName('h3'); // return all three h3 tags as HTML collection
console.log(all_heading[0].textContent); // output: This is heading 1
console.log(all_heading[1].textContent); // output: This is heading 2
console.log(all_heading[2].textContent); // output: This is heading 3
</pre>
</div>

<div id="by_class_name" class="py-2">
	<h2>Select HTML DOM elements by the class name using the javascript "getElementsByClassName()" method.</h2>
	<p>
		In CSS To select HTML tags using the class we use dot(.) at the beginning of the class name, but in javascript to select the HTML DOM elements using the class name we do not need to use dot(.) at the beginning of the class name. That means the "getElementsByClassName()" will take only the class name as a string without dot and return an <a class="text-primary" rel="dofollow" href="">HTMLCollection</a> of HTML element just like the "getElementsByTagName()" method.
	</p>
<br>
<span><b>Example:</b></span>
<pre class="prettyprint lang-js">
//HTML
&lt;h3 class="heading">This is heading 1&lt;/h3>
&lt;h3 class="heading">This is heading 2&lt;/h3>
&lt;h3 class="heading">This is heading 3&lt;/h3>


//js
var all_heading = document.getElementsByClassName('heading'); // return a collection of html DOM elements
console.log(all_heading[0].textContent); // output: This is heading 1
console.log(all_heading[1].textContent); // output: This is heading 2
console.log(all_heading[2].textContent); // output: This is heading 3
</pre>
</div>

<div id="by_id" class="py-2">
	<h2>Select HTML DOM element by the ID using the javascript “getElementById()” method.</h2>
	<p>
		Selecting an HTML element using the ID is the most common and popular way to select a single element in javascript. <br>

		We know every ID is unique in a web page, so if you select the HTML DOM element using the ID it will return a single element. To select an HTML DOM element using ID in javascript we need to use the “getElementById()” and this method will take the ID name of your HTML DOM element as a string without a hash.

	</p>
<br>
<span><b>Example:</b></span>
<pre class="prettyprint lang-js">
//Html
&lt;h1 id="main_title">This is main title&lt;/h1>

//js:
var main_title_h1_tag  = document.getElementById(main_title);
console.log(main_title_h1_tag .textContent) //output: This is main title
</pre>
</div>



<div id="by_name_attr" class="py-2">
	<h2>Select HTML DOM elements by the name attribute using the javascript “getElementsByName()” method.</h2>
	<p>
		In our input element, we need to use the name attribute so that we can get the value on the server side.  Now if you want to select your input element using the name attribute you can use the  “getElementsByName()”
		Methods. This method will take the name of your name attribute and will return a <a class="text-primary" rel="dofollow" href="">NodeList</a> not a single item. <br> <br>

		<b>Note:</b> check carefully the name of the method is “getElements” (plural)not “getElement”(singular) so from the name, we can understand easily that it will select multiple DOM elements. <br>


		The “getElementsByName()” will return a <a class="text-primary" rel="dofollow" href="">NodeList</a> not HTML collection or array, but you can access like array index. However, you can’t use Array Methods, like valueOf(), push(), pop(), or join() on a node list.

	</p>
<br>
<span><b>Example:</b></span>
<pre class="prettyprint lang-js">
//HTML
&lt;form> 
	&lt;input type="email" name="user_email" value="default1@gmail.com"> &lt;br>  &lt;br>
	&lt;input type="email" name="user_email" value="default2@gmail.com"> &lt;br>  &lt;br>
	&lt;input type="password" name="user_pass" value="123456"> &lt;br>  &lt;br>
	&lt;button id="submit_btn">Submit&lt;/button>
&lt;/form>

//Js
var user_email = document.getElementsByName('user_email');
console.log(user_email[0].value); output: default1@gmail.com
console.log(user_email[1].value); output: default2@gmail.com

</pre>
</div>


<div id="multiple_element" class="py-2">
	<h2>Select multiple HTML DOM elements like CSS selecting way by using the javascript “querySelectorAll()”  method.</h2>
	<p>
		The “querySelectorAll()”  method is one of the most popular ways to selecting complex multiple HTML DOM elements. Using this method we can select HTML DOM element exactly the same as CSS. That means the “querySelectorAll()” method can accept the tag name, class name (with dot), id name(with hash), attribute, etc as parameters. <br> <br>

		<b>Note:</b>
		Like the  “getElementsByName()” method, this methos also return a <a class="text-primary" rel="dofollow" href="">NodeList</a> not Array or collection.

	</p>
<br>
<span><b>Example:</b></span>
<p>Suppose we have a menu with a dropdown now we can select all children or all parents from this menu.</p>
<pre class="prettyprint lang-js">
//HTML
	&lt;ul class="menu">
		&lt;li>&lt;a href="">Home&lt;/a>&lt;/li>
		&lt;li class="parent">
			&lt;a href="#">About&lt;/a>
			
			&lt;ul class="child">
				&lt;li>&lt;a href="">About 1&lt;/a>&lt;/li>
				&lt;li>&lt;a href="">About 2&lt;/a>&lt;/li>
			&lt;/ul>
		&lt;/li>
		&lt;li class="parent">
			&lt;a href="#">Service&lt;/a>
			&lt;ul class="child">
				&lt;li>&lt;a href="">Service 1&lt;/a>&lt;/li>
				&lt;li>&lt;a href="">Service 2&lt;/a>&lt;/li>
			&lt;/ul>
		&lt;/li>
	&lt;/ul>

//Js

//select all li which has paret class
var all_parents = document.querySelectorAll('.menu .parent');
console.log(all_parents); // NodeList of li tag
console.log(all_parents[0]); // About li tag
console.log(all_parents[1]); // Service li tag

// select all a tag which is just inside the parent class
var a_of_all_parents = document.querySelectorAll('.menu .parent > a');
console.log(a_of_all_parents); // NoteList of a tag
console.log(a_of_all_parents[0]); // About a tag
console.log(a_of_all_parents[1]); // Service of a tag

// select all a tag inside the parent class 
var all_a_of_parents = document.querySelectorAll('.menu .parent a'); // Node List contain 6 a tags.
</pre>
</div>


<div id="single_element" class="py-2">
	<h2>Select a single HTML DOM element like CSS selecting way by using the “querySelector()”  method.</h2>
	<p>
		The “querySelector()”  method is same as the “querySelectorAll()”  method except the “querySelector()” method select single html DOM element where the “querySelectorAll()” select multiple html DOM element.


		<b>Note:</b> From multiple elements, it will select the very first HTML element.


	</p>
<br>
<span><b>Example:</b></span>
<pre class="prettyprint lang-js">
var first_parents = document.querySelector('.menu .parent');
console.log(first_parents); // select the About parent because about is the first parent.
</pre>
</div>


<div class="py-3">
	<h3>When which javaScript Selection we should use?</h3>
	<ul>
		<li>👌 For single DOM selecting use getElementById() method</li>
		<li>👌 For simple and multiple DOM seleting use getElementByClassName() method</li>
		<li>👌 For Complex and single DOM seleting use the querySelector()  method</li>
		<li>👌 For Complex and Multiple DOM seleting use the querySelectorAll()  method</li>
		<li>👌 To select by attarbute use  querySelector() or querySelectorAll() method</li>
	</ul>

</div>

<div class="py-3">
	<h4>For better learning, you should clear some javaScript Concepts.</h4>
	<ul>
		<li>📖 <a class="text-primary" rel="dofollow" href="">Difference Between javaScript Array, NodeList, HTML Collection.</a></li>
		<li>📖 <a class="text-primary" rel="dofollow" href="">How to Select HTML Elements using HTML attributes.</a></li>
		<li>📖 <a class="text-primary" rel="dofollow" href="">Difference Between Array Filter and Array Map In JavaScript.</a></li>
	</ul>
</div>














@endsection
{{-- end post content --}}
















@section('code')
    {{-- <a href="{{route('Download.Page',['id'=>1,'title'=>'How to catch CSS pseudo element using javaScript'])}}" class="btn btn-danger">Download Source Code</a> --}}
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
Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae inventore, dicta minima cumque nostrum expedita deserunt vitae nihil consectetur itaque maiores possimus ad, odit suscipit accusamus blanditiis, incidunt! Quam, dicta culpa repudiandae eius delectus consequuntur sed est id ut eveniet, odit maxime corrupti accusantium accusamus minima voluptates, doloremque tempore voluptatum debitis sapiente, deleniti! Nam quisquam officiis ea dolorem tenetur expedita labore beatae amet ullam necessitatibus. Labore quisquam, ab nesciunt adipisci quam reprehenderit dolore ex? Vitae repellendus corporis doloribus laboriosam possimus quo porro, officia blanditiis ipsum veritatis culpa asperiores, iste eos. Alias id, quae sequi, rerum commodi beatae. Laudantium, necessitatibus?
@endsection
