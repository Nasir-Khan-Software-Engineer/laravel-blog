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