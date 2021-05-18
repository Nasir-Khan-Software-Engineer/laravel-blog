@extends('Layouts.master')


@section('SEO')
<title>Other</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
@endsection
@section('main-container')

	<section class="medium-gap standard-home without-sidebar-home">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-12">
	          	<h1 class="text-center page-title pb-4">Others</h1>
	          	
	            <div class="standard-posts">
	              <div class="row masonry-layout normal-col-gap">

	              	
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
	         
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

@endsection