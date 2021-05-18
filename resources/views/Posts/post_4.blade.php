@extends('Layouts.master')
@section('SEO')
<title>Automatic Show and Hide pop-up message box</title>
<meta name="description" content="The POP-up message is one of the common features of every project. Also, this is so easy to create, using javascript you can create your own custom pop-up message easily. in this post I will show 4 types of pop-up messages that you can apply to your project. Also, provide you the source code so that you can easily create it">
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
                                    <img src="{{asset('assets/image/posts/popup-message-box.jpg')}}" alt="Automatic Show and Hide pop-up message box">
                                </div>
                                <div class="down-content">
                                    <h1>Automatic Show and Hide pop-up message box</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>
                                    <p class="first-paragraph">
                                       
                                       The POP-up message is one of the common features of every project. Also, this is so easy to create, using javascript you can create your own custom pop-up message easily. in this post I will show 4 types of pop-up messages that you can apply to your project. Also, provide you the source code so that you can easily create it.
                                    </p>

                                    <h2>General Algorithm of pop-up message box</h2>
                                       <ul>
                                           <li>1. Design a pop-up box using HTML</li>
                                           <li>2. Hide your pop-up box using CSS</li>
                                           <li>3. Show Automatically using js</li>
                                           <li>4. Close pop-up box using js</li>
                                       </ul>
                                       
                                       <br>
                                    <p>
                                        
                                      <p>
                                        <b>Design (HTML)</b> <br>
                                             Try to keep it simple, if your pop-up message contains only an image then take a div, and inside the div keep your image also if you want a 'close button' keep the button inside your main div. To make your control(js) easy you can use id to your main div and your close button.
                                     

                                            <br>
                                       
                                         <b>Suggestion:</b> HTML provides a cool dialog tag to create this kind of pop-up message box you can use this if you want.
                                        
                                        
                                       
                                         <b>Design(CSS)</b> <br>
                                              if you want to keep your message box above of all the content you need to use CSS position(absolute) and z-index property 
                                       
                                     </p>

                                       <h2>Hiding the pop-up message box for the first time</h2>
                                       <p>
                                           most of the time we want to keep our pop-up message box hide for the first time, so to did this make sure you use CSS display property, don't did this using js for the first time hiding.
                                       </p>

                                       <h2>Automatically show pop-up message box</h2>
                                       <p>
                                           To show something automatically you need to use the CSS display block property, and automatically means after your website load or after some specific(defined) time CSS display property will apply to your box.
                                           Now to do something after a specific amount of time we can use javascript 
                                           'setTimeout" method, this function takes two parameters first one is a function and the second one is the waiting time(in milliseconds).
                                       </p>

                                       <b>Example:</b> <br>

                                        <pre class="prettyprint lang-js">
function showPopUp()
{
// our code
}
setTimeout(showPopUp,60000);
                                        </pre>
                                        <p>in this case, the "showPopUp" function will call automatically after 60000 milliseconds or 1 minute.</p>
                                       

                                       <h2>Close pop-up message box automatically</h2>
                                       <p>
                                           To close your box automatically you can also use the "setTimeout"  method.
                                       make sure you use waiting time technically. If you want to keep showing 1 minute and show the first time automatically after 1 minute. Make sure you call your close function after 2 minutes.
                                       </p>

                                      <b>Example</b> <br>

                                       <pre class="prettyprint lang-js">
function ClosePopUp()
{
// our code
}
setTimeout(ClosePopUp,120000)
                                       </pre>
                                       <p>in this case, the "ClosePopUp" function will call automatically after 120000 milliseconds or 2 minutes.</p>

                                       <b>Tips</b> <br>
                                       <p>
                                           1 secound   = 1000 milliseconds <br>
                                           1 minute    = 60000 milliseconds 
                                       </p>


                                       <h2>Close pop-up modal after clicking the close button</h2>
                                       <p>It is so easy to just call your close function (ClosePopUp) after the close button click.</p>

                                       <b>Example</b> <br>
                                       <pre class="prettyprint lang-html">
 &lt;button onclick="ClosePopUp()">Close&lt;/button>                                          
                                       </pre>



                                       <br>

                                       <h2>Show and Hide pop-up message box after the click.</h2>

                                       <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="html,result" data-user="free-source-code-bd" data-slug-hash="GRWgbKe" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Show and Hide pop-up message box after the click.">
                                         <span>See the Pen <a href="https://codepen.io/free-source-code-bd/pen/GRWgbKe">
                                         Show and Hide pop-up message box after the click.</a> by FreeSourceCodeBD (<a href="https://codepen.io/free-source-code-bd">@free-source-code-bd</a>)
                                         on <a href="https://codepen.io">CodePen</a>.</span>
                                       </p>

                                       <br>

                                       <h2>
                                           Automatically show and hide the pop-up message box after a specific amount of time.
                                       </h2>

                                       <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="js,result" data-user="free-source-code-bd" data-slug-hash="yLMydOg" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Automatically show and hide the pop-up message box after a specific amount of time.">
                                         <span>See the Pen <a href="https://codepen.io/free-source-code-bd/pen/yLMydOg">
                                         Automatically show and hide the pop-up message box after a specific amount of time.</a> by FreeSourceCodeBD (<a href="https://codepen.io/free-source-code-bd">@free-source-code-bd</a>)
                                         on <a href="https://codepen.io">CodePen</a>.</span>
                                       </p>
                                       
                                       
                                       <br>

                                      <h2> Automatically show and hide the pop-up message box with countdown time.</h2>

                                       <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="js,result" data-user="free-source-code-bd" data-slug-hash="JjWoQNB" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Automatically show and hide the pop-up message box with countdown time">
                                         <span>See the Pen <a href="https://codepen.io/free-source-code-bd/pen/JjWoQNB">
                                         Automatically show and hide the pop-up message box with countdown time</a> by FreeSourceCodeBD (<a href="https://codepen.io/free-source-code-bd">@free-source-code-bd</a>)
                                         on <a href="https://codepen.io">CodePen</a>.</span>
                                       </p>
                                       
                                       <br>

                                       <h2>automatically show pop-up message box but close after the click</h2>

                                       <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="js,result" data-user="free-source-code-bd" data-slug-hash="PopwrbY" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="automatically show pop-up message box but close after the click ">
                                         <span>See the Pen <a href="https://codepen.io/free-source-code-bd/pen/PopwrbY">
                                         automatically show pop-up message box but close after the click </a> by FreeSourceCodeBD (<a href="https://codepen.io/free-source-code-bd">@free-source-code-bd</a>)
                                         on <a href="https://codepen.io">CodePen</a>.</span>
                                       </p>
                                       

                                       <br>


                                       <h2>show pop-up message box after click but hide automatically</h2>

                                       <p class="codepen" data-height="400" data-theme-id="dark" data-default-tab="js,result" data-user="free-source-code-bd" data-slug-hash="RwpNzoO" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="show pop-up message box after click but hide automatically">
                                         <span>See the Pen <a href="https://codepen.io/free-source-code-bd/pen/RwpNzoO">
                                         show pop-up message box after click but hide automatically</a> by FreeSourceCodeBD (<a href="https://codepen.io/free-source-code-bd">@free-source-code-bd</a>)
                                         on <a href="https://codepen.io">CodePen</a>.</span>
                                       </p>
                                       


                                       


                                    </p>


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