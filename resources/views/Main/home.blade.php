@extends('Layouts.master')


@section('SEO')
<title>InsideTheDiv</title>
<meta name="description" content="Insidethediv is a blogging website for Programming & Web Development. This website will provide you tutorials to learn web desing(HTML, CSS, Bootstrap, Vue, React), Web Development(MySQL, PHP, Laravel, AJAX), Programming(C/C++, Python), etc with free source code">

<meta name="keywords" content="Insidethediv.com, blog for javascript, blog for web desing, blog for web development, blog for php, blog for mysql">
@endsection

@section('main-container')

<section class=" standard-home without-sidebar-home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="page-title-des">
					<h1 class="text-center page-title pb-2">InsideTheDiv</h1>
					<p class="description">Insidethediv is a blogging website for Programming & Web Development. This website will provide you tutorials to learn web desing(HTML, CSS, Bootstrap, Vue, React), Web Development(MySQL, PHP, Laravel, AJAX), Programming(C/C++, Python), etc with free source code.</p>
				</div>

				<div id="all-posts" class="standard-posts">
					<div class="row masonry-layout normal-col-gap">

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
									<a href="{{route('Single_Post_3')}}">Click on the image to view full size in a popup modal</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}


						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_7-18-06-2021-11-29-18pm.gif" alt="laravel route not found exception">
									<a href="{{route('Single_Post_4')}}">How to solve laravel route not found exception</a>
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
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_9-23-06-2021-11-33-54pm.gif" alt="MySQL short notes PDF">
									<a href="{{route('Single_Post_7')}}">Important MySQL short notes PDF for beginners 2021</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}

						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_10-26-06-2021-12-09-04am.gif" alt="create table in sql">
									<a href="{{route('Single_Post_8')}}">How to create a table in MySQL with example code</a>
								</div>
							</div>
						</div>
						{{-- // end single post --}}						


						<div class="col-lg-4 masonry-item ">
							<div class="standard-post post without-sidebar-post">
								<div class="down-content">
									<img class="img-fluid" src="https://www.admin.insidethediv.com/assets/img/post/post_11-26-06-2021-12-24-20am.gif" alt="Parent and child table in SQL">
									<a href="{{route('Single_Post_9')}}">Parent and child table in SQL with code example</a>
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