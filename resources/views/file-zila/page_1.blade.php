@extends('Layouts.master')





@section('SEO')

<title>FrontEnd</title>

<meta name="description" content="In this catgory you will find frontend releted tutorials, so if you want to learn CSS, JavaScript, Jquery, Vue, React, etc this category is for you.">

<meta name="keywords" content="blog for html, blog for css, blog for javascript, blog for Jquery, blog for vue, blog for frontend development">

@endsection



@section('main-container')



	<section class="medium-gap standard-home without-sidebar-home">

	      <div class="container">

	        <div class="row">

	          <div class="col-lg-12">

	          	<div class="page-title-des">

					<h1 class="text-center page-title pb-2">FrontEnd</h1>

					<p class="description">In this catgory you will find frontend releted tutorials, so if you want to learn CSS, JavaScript, Jquery, Vue, React, etc this category is for you.</p>

				</div>

	          	

	            <div id="all-posts" class="standard-posts">

	            	<div class="row masonry-layout normal-col-gap">


	            		<div class="col-lg-4 masonry-item ">
	            			<div class="standard-post post without-sidebar-post">
	            				<div class="down-content">
	            				    <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_17_1-07-07-2021-10-23-59am.gif" alt="Bootstrap-5 website">
	            					<a href="{{route('Single_Post_15')}}">Create a Responsive website using only bootstrap 5</a>
	            				</div>
	            			</div>
	            		</div>
	            		{{-- // end single post --}}
	            		
						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
								    <img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_3-15-06-2021-07-09-33pm.jpg" alt="HTML DOM Example">
									<a href="{{route('Single_Post_1')}}">How many ways we can select HTML tag or HTML DOM elements in javascript?</a>
								</div>
							</div>
						</div>

						{{-- // end single post --}}



                        <div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
								    <img class="img-fluid" src="https://admin.insidethediv.com/assets/img/post/post_4-15-06-2021-08-02-41pm.gif" alt="popup modal With Time Countdown In Javascrip">
									<a href="{{route('Single_Post_2')}}">How To Create Popup Modal Or Popup Message Box With Time Countdown In Javascript?</a>
								</div>
							</div>
						</div>

						{{-- // end single post --}}



                        <div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_5-16-06-2021-09-31-55pm.gif" alt="onclick popup image jquery">
									<a href="{{route('Single_Post_3')}}">Click On The Image To View Full Size In A Popup Modal</a>
								</div>
							</div>
						</div>

						{{-- // end single post --}}
		

						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_6-18-06-2021-11-27-54am.gif" alt="Responsive Dropdown menu with Submenu">
									<a href="{{route('Single_Post_5')}}">A Responsive Dropdown menu with Submenu</a>
								</div>
							</div>
						</div>

						{{-- // end single post --}}


						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_8-20-06-2021-08-18-09pm.gif" alt="Unit Converter">

									<a href="{{route('Single_Post_6')}}">Simple JavaScript Project with Source Code | Unit Converter</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}

						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_12-28-06-2021-06-10-28am.gif" alt="select CSS pseudo element using javaScript">
									<a href="{{route('Single_Post_10')}}">How to select CSS pseudo element using javaScript</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}

						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_13-28-06-2021-10-06-16pm.gif" alt="Center image vertically and horizontally">
									<a href="{{route('Single_Post_11')}}">Center an image in a div vertically and horizontally</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}

						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_14-29-06-2021-08-04-18pm.jpg" alt="Call JavaScript function after div">
									<a href="{{route('Single_Post_12')}}">How to Call JavaScript function after div load with source code</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}













	            	</div>

	            </div>



	            

	          </div>

	        </div>

	      </div>

	    </section>



@endsection