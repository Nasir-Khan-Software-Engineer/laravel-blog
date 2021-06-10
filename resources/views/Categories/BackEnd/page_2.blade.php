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
	          	<div class="page-title-des">
					<h1 class="text-center page-title pb-2">BackEnd</h1>
					<p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatum minima labore quisquam in quod rerum sed adipisci non cupiditate ipsum et officiis dolores, voluptates asperiores cumque nesciunt voluptatibus consequuntur? Voluptate, libero tenetur debitis odit nesciunt nihil recusandae velit voluptatum.</p>
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