@extends('Layouts.master')


@section('SEO')
<title>BackEnd</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
@endsection

@section('main-container')

	<section class="medium-gap standard-home without-sidebar-home">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-12">
	          	<h1 class="text-center page-title pb-4">BackEnd</h1>
	          	
	            <div class="standard-posts">
	              <div class="row masonry-layout normal-col-gap">


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
	         
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

@endsection