@extends('Layouts.master')
@section('SEO')
<title>Why Developer Need Basic SEO Knowledge</title>
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
                                    <img src="{{asset('assets/image/posts/seo-knowldge.jpg')}}" alt="Why Developer Need Basic SEO Knowledge">
                                </div>
                                <div class="down-content">
                                    <h1>Why Developer Need Basic SEO Knowledge</h1>
                                    <ul class="post-info">
                                        <li>January 10, 2021</li>
                                        <li><a href="https://nasir-khan.com" target="_blank">Nasir Khan</a></li>
                                    </ul>
                                    <p class="first-paragraph">
                                        This is one of the most confusing questions because we know we should keep our every different stage separate like the fort-end developer will build frontend, backend developer will build backend, and the SEO expert will take care of the SEO of our website.
                                        So why a developer should keep some basic SEO knowledge?
                                        Ok before answering this question let's answer some more questions. <br><br>


                                        <ul>
                                            <li>1. Why we actually use title and some other meta tag, when tough tags do not show on our website?</li>
                                            <li>2. How many h1 tags you can use on a web page?</li>
                                            <li>3. Using CSS font-size we can make our text large so why need heading tags?</li>
                                            <li>4. How search engine understand your image category?</li>
                                            <li>5. Using the js frontend framework we can build single page application so how search engine index all pages?</li>
                                            <li>6. what is the robot.txt file?</li>
                                            <li>7. What is the site map?</li>
                                            <li>8. why we do not sow file extension to the URL bar and should our URL meaningful?</li>
                                        </ul>
                                        <br><br>
                                    </p>

                                    


            
                                        
                                    <p class="last-paragraph">
                                        Here I write 8 basic simple questions but if you search google you could find more questions like this. <br>
                                        So if you know the answer of though questions that means you have basic knowledge and you already know how search engine index our website. <br> <br>

                                        <b>Now lets answer the main question</b> <br>
                                        Every website's target is taking place on search engine's first page so that  when someone searches on the search engine she/he easily find the website. <br>

                                        So in this case we need search engine friendly website. And to make our website searh engine friendly they(google, bing, yahoo, etc) provide some coding level suggests(like top questions 1-8) for us and when a SEO expert do not has any coding knowledge that means you (developer) need to take care of this. <br>
                                        And that's why a developer show have at list some basic knowledge of SEO.

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

@endsection