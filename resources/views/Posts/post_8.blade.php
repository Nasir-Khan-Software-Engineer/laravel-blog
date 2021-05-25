@extends('Layouts.master')
@section('SEO')
<title>How many ways we can select HTML tag or HTML DOM element using javascript</title>
<meta name="description" content="Filter and Map both are create new arrays but do not change or modify the main array.
                                        Both are called a function for every single item of the array.">
<meta name="keywords" content="HTML, CSS, JavaScript, php">

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
                                    <img src="{{asset('assets/image/posts/select-html-tag.jpg')}}" alt="How many ways we can select HTML tag or HTML DOM element using javascript">
                                </div>
                                <div class="down-content">
                                    <h1>How many ways we can select HTML tag or HTML DOM element using javascript</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>



                                    <p class="first-paragraph">
                                        
                                        Using javascript we can select and change any HTML tag or HTML DOM element easily. And to select HTML tag or dom elements javascript provide us different, different ways. <br>
                                        In this post, we will learn how many ways we can select our HTML tag or HTML dom element using javascript. Also, I will give some suggestions so that you can understand when which way you should use to select the HTML tag or HTML dom element.
                                    </p>

                                    <h2>Six ways of selecting  HTML tag or HTML DOM element in javascript</h2>
                                    <ol>
                                        <li><a href="#tag">Select HTML DOM element by tag</a></li>
                                        <li><a href="#class">Select HTML DOM element by class</a></li>
                                        <li><a href="#id">Select HTML DOM element by id</a></li>
                                        <li><a href="#name">Select HTML DOM element by name attrbute</a></li>
                                        <li><a href="#single">Select single HTML DOM element like the CSS selecting way</a></li>
                                        <li><a href="#multiple">Select multiple HTML DOM elements the like CSS selecting way</a></li>
                                        
                                    </ol>
                                        
                                        
                                        
                                    <div id="tag">
                                        <h2>Select HTML DOM elements by tag using the “getElementsByTagName()” method.</h2>
                                        <p>
                                            We know In CSS we can select HTML DOM element by tag name, in javascript we can also select HTML DOM element by HTML tag name using the “getElementsByTagName()” method. This method will take the tag name as a string and return an <b>HTMLCollection</b> of all the selected tags.
                                            <br>
                                            Suppose in our website we have three h3 tags, now if we apply any CSS to the h3 tag it will change all three tags, so just like the CSS, javascript getElementsByTagName() method will give us all three tag as an HTMLCollection which is live in HTML DOM, and from this collection, we can select a single item just tile array.
                                        </p>
                                        
                                        <h3>
                                            Example of the “getElementsByTagName()” method
                                        </h3>
                                        
                                        <pre class="prettyprint lang-js">
<!-- HTML -->
&lt;h3 class="heading">This is heading 1&lt;/h3>
&lt;h3 class="heading">This is heading 2&lt;/h3>
&lt;h3 class="heading">This is heading 3&lt;/h3>

<!-- js -->
var all_heading = document.getElementsByTagName('h3'); // return a collection of html DOM elements
console.log(all_heading[0].textContent); // output: This is heading 1
console.log(all_heading[1].textContent); // output: This is heading 2
console.log(all_heading[2].textContent); // output: This is heading 3
                                        </pre>
                                        <p><b>Note: </b> Here the “getElementsByTagName()” method select all three html tags.</p>

                                    </div>


                                    <div id="class">
                                        <h2>Select HTML DOM elements by class name using the “getElementsByClassName()” method.</h2>
                                        <p>
                                            In CSS To select HTML tags using the class we use dot(.) at the beginning of the class name, but in javascript to select the HTML DOM elements using the class name we do not need to use dot(.) at the beginning of the class name. That means the “getElementsByClassName()” will take the class name as a string <b>without dot</b> and return an <b>HTMLCollection</b> of HTML element just like the “getElementsByTagName()” method.
                                        </p>
                                       

                                        <h3>
                                            Example of the “getElementsByClassName()” method.

                                        </h3>
                                        <pre class="prettyprint lang-js">

<!-- HTML -->
&lt;h3 class="heading">This is heading 1&lt;/h3>
&lt;h3 class="heading">This is heading 2&lt;/h3>
&lt;h3 class="heading">This is heading 3&lt;/h3>

<!-- js -->
var all_heading = document.getElementsByClassName('heading'); // <b>without dot and return an >HTMLCollection of HTML element</b>

console.log(all_heading[0].textContent); // output: This is heading 1
console.log(all_heading[1].textContent); // output: This is heading 2
console.log(all_heading[2].textContent); // output: This is heading 3

                                        </pre>
                                        <p><b>Note: </b> Here the “getElementsByClassName()” method select all three html tags.</p>
                                        

                                    </div>

                                    <div id="id">
                                        <h2>Select HTML DOM element by ID using the “getElementById()” method.</h2>
                                        <p>
                                           We know every ID is unique in a web page, so if you select HTML DOM element using the ID that means it will return a single element. So to select an HTML DOM element using ID in javascript we need to use the “getElementById()” and this is the most common and popular way to selecting a single element from HTML using javascript. <br>
                                           The “getElementById()” method will take the ID name of your HTML DOM element as a string <b>without a hash.</b>
                                        </p>
                                        <h3>
                                            Example of the “getElementById()” method
                                        </h3>
                                        <pre class="prettyprint lang-js">
<!-- HTML -->
&lt;button id="click_btn">Click Me&lt;/button>

<!-- js -->
var btn = document.getElementById(‘click_btn’); // <b>without hash.</b>
console.log(btn.textContent) //output: Click Me
                                        </pre>

                                          <p><b>Note: </b> Here the “getElementById()” method select only a signle element.</p>

                                    </div>


                                    <div id="name">
                                        <h2>Select HTML DOM elements by name attribute using the “getElementsByName()” method.</h2>
                                        <p>
                                            In our input element, we need to use the name attribute, now if you want to select your input element using the name attribute you can use the  “getElementsByName()” methods. <br>

                                            This method will take the name of your name attribute and will return an <b>NodeList  not HTMLCollection or Array</b>.

                                            <br>
                                            <br>
                                            <b><mark>Note:</mark></b> Check carefully, the name of the methods it is “getElements” not “getElement” so from the name we can understand easily that it will get multiple DOM elements.
                                            The “getElementsByName()” will return a NodeList not HTMLCollection or Array., but you can access like array index. However, you cannot use Array Methods, like valueOf(), push(), pop(), or join() on a node list.

                                        </p>
                                        <h3>
                                            Example of the “getElementsByName()” method
                                        </h3>
                                        <pre class="prettyprint lang-js">
<!-- HTML -->
&lt;form> 
    &lt;input type="email" name="user_email" value="default1@gmail.com"> &lt;br>  &lt;br>
    &lt;input type="email" name="user_email" value="default2@gmail.com"> &lt;br>  &lt;br>
    &lt;input type="password" name="user_pass" value="123456"> &lt;br>  &lt;br>
    &lt;button id="submit_btn">Submit&lt;/button>
&lt;/form>

<!-- JS -->
var user_email = document.getElementsByName('user_email');
console.log(user_email[0].value); output: default1@gmail.com
console.log(user_email[1].value); output: default2@gmail.com

                                        </pre>

                                        <p><b>Note: </b> Here the “getElementsByName()” method select all two user_email input fileds.</p>

                                    </div>


                                    <div id="multiple">

                                        <h2>Select multiple HTML DOM elements like CSS selecting way by using the “querySelectorAll()”  method.</h2>
                                        <p>
                                            The “querySelectorAll()”  method is one of the most popular ways to selecting complex multiple HTML DOM elements. Using this method we can select HTML DOM element exactly the same as CSS. 
                                             <br>
                                             <br>
                                           <b>Note:</b>
                                            Like the  “getElementsByName()” this methos also return a NodeList not array or collection.


                                        </p>
                                        <h3>
                                            Example of The “querySelectorAll()”  method 
                                        </h3>
                                        <p>
                                            Suppose we have a menu with a dropdown now we can select all children or all parents from this menu.
                                        </p>
                                        <pre class="prettyprint lang-js">
<!-- HTML -->
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


 <!-- JS -->
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

                                    <div id="single">
                                        
                                        <h2>Select a single HTML DOM element like CSS selecting way by using the “querySelector()”  method.</h2>
                                        <p>
                                            The “querySelector()”  method is same as the “querySelectorAll()”  method except the “querySelector()” method select single html DOM element and the “querySelectorAll()” select multiple html DOM element.
                                             <br>
                                             <br>
                                           <b>Note:</b>
                                            From multiple elements, it will select the very first HTML element.


                                        </p>
                                        <h3>
                                            Example of The “querySelectorAll()”  method 
                                        </h3>
                                        <p>
                                            Suppose we have a menu with a dropdown now we can select all children or all parents from this menu.
                                        </p>
                                        <pre class="prettyprint  lang-js">
 <!-- JS -->
var first_parents = document.querySelector('.menu .parent');
console.log(first_parents); // select the About parent because about is the first parent.

                                        </pre>
                                    </div>


                                    <h2>
                                        When which javaScript Selection method should use
                                    </h2>

                                    <ol>
                                        <li>For single DOM selecting use getElementById() method</li>
                                        <li>For simple and multiple DOM seleting use getElementByClassName() method</li>
                                        <li>For Complex and single DOM seleting use the querySelector()  method</li>
                                        <li>For Complex and Multiple DOM seleting use the querySelectorAll()  method</li>
                                        <li>To select by attarbute use  querySelector() or querySelectorAll() method</li>

                                    </ol>

                                    <h3>See More</h3>
                                    <ol>
                                        <li><a class="text-primary" href="">Difference Between HTMLCollection and NodeList</a></li>
                                    </ol>


                                    <br>
                                    {{-- // help quate --}}
                                    @include('Layouts.quate')
                                   
                                </div>
                            </div>
                        </div>


                        {{-- // autor card --}}
                        @include('Layouts.author')

                        {{-- <div class="col-12 mt-3">
                            <h2>Comments</h2>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')

@endsection