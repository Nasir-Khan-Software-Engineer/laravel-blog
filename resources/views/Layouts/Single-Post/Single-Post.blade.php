<!DOCTYPE html>
<html lang="en">

@include('Layouts.header')

<body>

	@include('Layouts.nav')

	<section class="medium-gap single-post">
		<div class="container">
			<div class="row">
				<div id="single-post-content" class="col-lg-9 single-post-content">
					{{-- // single post  top ad section --}}
					@yield('top-ad')
					{{-- // end single post top ad  section--}}
					<div class="cover-image">
						@yield('cover-image')
					</div>

					<div class="main-content">
						@yield('main-content')

						<div class="mt-2">
							@include('Layouts.quate')
						</div>
					</div>

					{{-- // single post btoom ad section --}}
					@yield('bottom-ad')
					{{-- // end single post btoom ad section --}}


					@yield('author')

					@yield('comment');

				</div>

				 <div id="side-bar-content" class="col-12 col-lg-3 side-bar-content">
				 	@include('Layouts.side-bar')
				 </div>
			</div>
		</div>
	</section>

	@include('Layouts.footer')

</body>
{{-- end body --}}
</html>
{{-- end html --}}