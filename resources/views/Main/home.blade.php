@extends('Layouts.master')


@section('SEO')
<title>Nasir Khan - Personal Blog</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript, php">
@endsection

@section('main-container')

<section class="medium-gap standard-home without-sidebar-home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<h1 class="text-center page-title pb-4">Nasir Khan - Personal Blog</h1>

				<div class="standard-posts">
					<div class="row masonry-layout normal-col-gap">

						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_1')}}"><img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_1')}}">
										<h4>
											How to catch CSS pseudo element using javaScript.
										</h4>
									</a>
								</div>
							</div>
						</div>


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_2')}}"><img src="{{asset('assets/image/posts/js-array-map-vs-filter.jpg')}}" alt="Difference Between javaScript Array map and filter"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_2')}}">
										<h4>
											Difference Between javaScript Array map and filter.
										</h4>
									</a>
								</div>
							</div>
						</div>


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_3')}}"><img src="{{asset('assets/image/posts/laravel-app.jpg')}}" alt="How to increase Laravel App Performance"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_3')}}">
										<h4>
											How to increase Laravel App Performance
										</h4>
									</a>
								</div>
							</div>
						</div>


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_4')}}"><img src="{{asset('assets/image/posts/popup-message-box.jpg')}}" alt="Automatic Show and Hide pop-up message box"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_4')}}">
										<h4>
											Automatic Show and Hide pop-up message box.
										</h4>
									</a>
								</div>
							</div>
						</div>						



						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_5')}}"><img src="{{asset('assets/image/posts/seo-knowldge.jpg')}}" alt="Why Developer Need Basic SEO Knowledge"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_5')}}">
										<h4>
											Why Developer Need Basic SEO Knowledge.
										</h4>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_6')}}"><img src="{{asset('assets/image/posts/image-upload-php.jpg')}}" alt="Upload an image with validation using PHP"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_6')}}">
										<h4>
											Upload an image with validation using PHP
										</h4>
									</a>
								</div>
							</div>
						</div>						



						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_7')}}"><img src="{{asset('assets/image/posts/four-ways-of-js-object.jpg')}}" alt="How many ways we can create object in javaScript"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_7')}}">
										<h4>
											How many ways we can create object in javaScript
										</h4>
									</a>
								</div>
							</div>
						</div>						


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_8')}}"><img src="{{asset('assets/image/posts/select-html-tag.jpg')}}" alt="How many ways we can select HTML tag or HTML DOM element using javascript"></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_8')}}">
										<h4>
											How many ways we can select HTML tag or HTML DOM element using javascript
										</h4>
									</a>
								</div>
							</div>
						</div>




					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection