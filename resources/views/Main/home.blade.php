@extends('Layouts.master')


@section('SEO')
<title>Nasir Khan - Personal Blog</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
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
									<a href="{{route('Post_1')}}"><img src="{{asset('assets/image/css-pseudo-element-in-javascript.jpg')}}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_1')}}"><h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4></a>
									<ul class="post-info">
										<li><a href="#">January 10, 2020</a></li>
										<li><a href="#">Admin</a></li>
									</ul>
									<p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tb forage four loko.</p>
								</div>
							</div>
						</div>


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_1')}}"><img src="{{asset('assets/image/css-pseudo-element-in-javascript.jpg')}}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_1')}}"><h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4></a>
									<ul class="post-info">
										<li><a href="#">January 10, 2020</a></li>
										<li><a href="#">Admin</a></li>
									</ul>
									<p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tb forage four loko.</p>
								</div>
							</div>
						</div>


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_1')}}"><img src="{{asset('assets/image/css-pseudo-element-in-javascript.jpg')}}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_1')}}"><h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4></a>
									<ul class="post-info">
										<li><a href="#">January 10, 2020</a></li>
										<li><a href="#">Admin</a></li>
									</ul>
									<p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tb forage four loko.</p>
								</div>
							</div>
						</div>


						<div class="col-lg-4 masonry-item travel">
							<div class="standard-post without-sidebar-post">
								<div class="post-image">
									<a href="{{route('Post_1')}}"><img src="{{asset('assets/image/css-pseudo-element-in-javascript.jpg')}}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="{{route('Post_1')}}"><h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4></a>
									<ul class="post-info">
										<li><a href="#">January 10, 2020</a></li>
										<li><a href="#">Admin</a></li>
									</ul>
									<p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tb forage four loko.</p>
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