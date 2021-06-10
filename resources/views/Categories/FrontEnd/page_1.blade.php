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
	            					<a href="{{route('Single_Post_1')}}">How many ways we can select HTML tag or HTML DOM elements in javascript?</a>
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