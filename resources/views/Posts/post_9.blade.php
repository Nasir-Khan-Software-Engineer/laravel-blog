@extends('Layouts.master')
@section('SEO')
<title>Pure CSS Animated dropdown buttons with free source code and live example</title>
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
                                    <img src="{{asset('assets/image/posts/drop-down.jpg')}}" alt="Pure CSS Animated dropdown buttons with free source code and live example">
                                </div>
                                <div class="down-content">
                                    <h1>Pure CSS Animated dropdown buttons with free source code and live example</h1>
                                    <ul class="post-info">
                                        <li>May 26, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>



                                    <p class="first-paragraph">
                                        
                                       Dropdown buttons or dropdown menu is the most important things in every website, especially in e-commerce website to show category and subcategory we need the dropdown button. In this post, we will create <b>nine(9)</b> animated dropdown buttons using pure CSS. Also, I will provide you the complete source code with a live example.
                                    </p>

                                    <h2>What are the dropdown buttons?</h2>
                                    <p>
                                        Dropdown buttons are actually the representation of the parent-child relationship. At the bigging the parent will be shown and when we click on the parent or hover on the parent all children will be shown. 
                                        <br>
                                        Suppose a website provides three services (web design, web development, and SEO) in this case the parent category is ‘service’ and under the ‘service’ category we can show our three services.
                                        Now at the very bigging, only the ‘service’ would show, and when we click on the service or hover on the ‘service’ then our three categories will show.

                                    </p>

                                    <h2>Nine Animated dropdown buttons</h2>

                                    <ol >
                                        <li><a class="text-primary" href="#btn-1">Basic Dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-2">Height Expand Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-3">Width Expand Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-4">Slide Up Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-5">Slide Down Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-6">Rotating Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-7">Zoom-in zoom-out from left Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-8">Zoom-in zoom-out from the center Animated dropdown button</a></li>
                                        <li><a class="text-primary" href="#btn-9">Zoom-in zoom-out from Right Animated dropdown button</a></li>
                                    </ol>

                                    <h2>HTML structure for dropdown button</h2>
                                    <p>
                                        To create a dropdown button first you need a parent element and inside the parent element, you need to keep all the child elements.
                                        Note: if you don’t keep your child element inside the parent element the CSS hover effect will not work. So if you want to create the dropdown button with CSS hover hove effect please keep your child button inside the parent button.

                                    </p>

                                    <h3 id="btn-1">Example of HTML structure for dropdown button</h3>
                                    <pre class="prettyprint lang-html">
&lt;!-- Basic -->
&lt;parent>
    Parent Button Text
    &lt;childs>
        Child 1
        Child 2
Child 3
    &lt;/childs>
&lt;/parent>

                                    </pre>


                                 <pre class="prettyprint lang-html">
&lt;!-- Real -->
&lt;ul class="dropdown dropdown-1">
    &lt;li class="parent"> &lt;!-- parent -->
        &lt;a href="">DropDown 1 &lt;span>👈&lt;/span>&lt;/a> &lt;!-- parent text -->

        &lt;ul class="childs"> &lt;!-- childs -->
            &lt;li>&lt;a href="">- Service&lt;/a>&lt;/li> &lt;!-- single child -->
            &lt;li>&lt;a href="">- About Us&lt;/a>&lt;/li> &lt;!-- single child -->
            &lt;li>&lt;a href="">- Contact&lt;/a>&lt;/li> &lt;!-- single child -->
        &lt;/ul>
    &lt;/li>
&lt;/ul>
                                    </pre>
                                    <p>
                                        <b>Note:</b> here I used unorder list, but you can use a div tag also. Also, I used HTML emoji for indication you can any icon.
                                    </p>
                                        

                                    <h2>CSS Tricks for dropdown buttons</h2>
                                    <p>
                                        To create a dropdown button using CSS we need to use the CSS hover effect. The main trick is we will keep hiding the children elements first and when we hover on our parent element then we will show all the children.
                                    </p>
                                    <pre  class="prettyprint lang-css">
/*Basic Example*/
.childs{
     display:none;
}
.parent:hover .childs{
     display:block;
}
                                    </pre>
                                    <pre class="prettyprint lang-css" >

/*Real Example*/

.dropdown{
    display: inline-block;
    margin: 10px;
}
.parent{
    display: block;
}
.parent > a{
    display: block;
    background-color: #f1f1f1;
    box-sizing: border-box;
    padding: 7px 30px;
}
.dropdown .parent a span{
    display: inline-block;
    transition:0.4s;
    font-size: 14px;
}
 /*for icon rotation*/
.dropdown .parent:hover > a span{
    transform:rotate(-90deg);
}
.childs{
    background-color: #d3d3d3;
}
.childs li{
    display: block;
    border-bottom: 1px solid #f1f1f1;
}
.childs li a{
    display: block;
    box-sizing: border-box;
    padding: 7px 30px;
}

/*main effect*/
.dropdown-1 .childs{
    display: none;
}
.dropdown-1 .parent:hover > .childs{
    display: block;
}
                                    </pre>




                                    <h2>Basic Tips to create dropdown buttons.</h2>

                                    <ol>
                                        <li>For Animation, we need CSS transition property.</li>
                                        <li>Here we use display property to show and hide child elements, but you can use height and with to show and hide.</li>
                                        <li>CSS transition property does not work when we use display none and display block so for animation try to use CSS position property technically to hide and show.</li>
                                        <li>Using CSS position property is the best practice.</li>
                                        <li>Remember using height or width is not the best practice.</li>
                                        <li>CSS transition property does not work when we use height auto.</li>
                                        <li>CSS transition property does not work on span element that’s what we make our icon display inline-block.</li>
                                    </ol>


                                    <h2>9 Pure CSS Animated dropdown buttons live example</h2>
                                    <p class="codepen" data-height="520" data-theme-id="dark" data-default-tab="result" data-user="free-source-code-bd" data-slug-hash="KKWWmEM" style="height: 520px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Drop-Down Buttons | Animated Drop-Down Buttons">
                                      <span>See the Pen <a href="https://codepen.io/free-source-code-bd/pen/KKWWmEM">
                                      CSS Drop-Down Buttons | Animated Drop-Down Buttons</a> by FreeSourceCodeBD (<a href="https://codepen.io/free-source-code-bd">@free-source-code-bd</a>)
                                      on <a href="https://codepen.io">CodePen</a>.</span>
                                    </p>
                                    




                                    <div id="btn-2">
                                        <h2>Height Expand Animated dropdown button</h2>
                                        <p>
                                            First time hide child using height property and when hover uses a fixed height not auto. Also, make use you use CSS overflow property for your child’s element
                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-2 .childs{
    height: 0px;
    transition: 0.4s;
    overflow: hidden;
}
.dropdown-2 .parent:hover .childs{
    height: 100px;
    transition:0.4s;
}
                                        </pre>
                                    </div>


                                    <div id="btn-3">
                                        <h2>Width Expand Animated dropdown button</h2>
                                        <p>
                                            First time hide child using height and width property and when hover uses a fixed width and auto to hight. Also, make use you use CSS overflow property for your child’s element.
                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-3 .childs{
    width: 0px;
    height: 0px;
    transition: 0.4s;
    overflow: hidden;
}
.dropdown-3 .parent:hover  .childs{
    width: 100%;
    height: auto;
}
                                        </pre>
                                    </div>
                                               

                                    <div id="btn-4">
                                        <h2>Slide Up Animated dropdown button</h2>
                                        <p>
                                           This time we will use CSS position property to hide and show our child element.
                                           So to hide the child element using CSS position property we need to make it position absolute and position relative to the parent element. Make use you add overflow property to your parent element. Finally, use CSS top property with a large negative value and to show use top 100% after hover. 

                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-4 .parent{
    position: relative;
    overflow: hidden;
}
.dropdown-4 .childs{
    position: absolute;
    width: 100%;
    z-index: 1;
    top: -400%;
    left: 0;
    transition: 0.1s;
}
.dropdown-4 .parent:hover{
    overflow: visible;
}
.dropdown-4 .parent:hover  .childs{
    top: 100%;
}
                                       </pre>
                                    </div>

                                    <div id="btn-5">
                                        <h2>Slide Down Animated dropdown button</h2>
                                        <p>
                                           This is the same as slide up one just use large-top value to hide and use CSS top 100% to show when hover.

                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-5 .parent{
    position: relative;
    overflow: hidden;
}
.dropdown-5 .childs{
    position: absolute;
    width: 100%;
    z-index: 1;
    top: 400%;  /*just changed*/
    left: 0;
    transition: 0.1s;
}
.dropdown-5 .parent:hover{
    overflow: visible;
}
.dropdown-5 .parent:hover  .childs{
    top: 100%;
}
                                       </pre>
                                    </div> 

                                    <div id="btn-6">
                                        <h2>Rotating Animated dropdown button</h2>
                                        <p>
                                          This one also the same as the previous one, just to hide use a large CSS right positive value, and for rotation use the CSS transform rotate property.

                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-6 .parent{
    position: relative;
    overflow: hidden;
}
.dropdown-6 .childs{
    position: absolute;
    width: 100%;
    z-index: 1;
    top: 100%;
    right: 200px; /*just changed*/
    transition: 0.4s;

}
.dropdown-6 .parent:hover{
    overflow: visible;
}
.dropdown-6 .parent:hover  .childs{
    right: 0px; /*just changed*/
    transform: rotate(360deg); /*just changed*/
}
                                        </pre>
                                    </div>



                                    <div id="btn-7">
                                        <h2>Zoom-in zoom-out from left Animated dropdown button</h2>
                                        <p>
                                         This one also the same as the previous one, just to hide use the large CSS left negative value, and for zoom use, the CSS transform scale property.

                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-7 .parent{
    position: relative;
    overflow: hidden;
}
.dropdown-7 .childs{
    position: absolute;
    width: 100%;
    z-index: 1;
    top: 100%;
    left: -100px; /*just changed*/
    transition: 0.4s;
    transform: scale(0); /*just changed*/
}
.dropdown-7 .parent:hover{
    overflow: visible;
}
.dropdown-7 .parent:hover  .childs{
    left: 0px; /*just changed*/
    transform: scale(1); /*just changed*/
}

                                        </pre>
                                    </div>  

                                    <div id="btn-8">
                                        <h2>Zoom-in zoom-out from the center Animated dropdown button</h2>
                                        <p>
                                          This one also the same as the previous one, just to hide and show use the CSS transform scale property

                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-8 .parent{
    position: relative;
}
.dropdown-8 .childs{
    position: absolute;
    width: 100%;
    z-index: 1;
    top: 100%; 
    left: 0; /*just changed*/
    transition: 0.4s;
    transform: scale(0); /*just changed*/
}

.dropdown-8 .parent:hover  .childs{
    transform: scale(1); /*just changed*/
}

                                        </pre>
                                    </div> 

                                    <div id="btn-9">
                                        <h2>Zoom-in zoom-out from Right Animated dropdown button</h2>
                                        <p>
                                          This one also the same as the previous one, just to hide use a large CSS right positive value, and for rotation use the CSS transform rotate property.

                                        </p>
                                        <pre class="prettyprint lang-css">
.dropdown-9 .parent{
    position: relative;
}
.dropdown-9 .childs{
    position: absolute;
    width: 100%;
    z-index: 1;
    top: 100%;
    right: -100px; /*just changed*/
    transition: 0.4s;
    transform: scale(0); 
}

.dropdown-9 .parent:hover  .childs{
    right: 0px; /*just changed*/
    transform: scale(1);
}
                                        </pre>
                                    </div>  


                                    <h3>See More</h3>
                                    <ol>
                                        <li><a class="text-primary" href="{{route('Single_Post_1')}}">How To Catch CSS Pseudo Element Using JavaScript</a></li>
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
<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
@endsection