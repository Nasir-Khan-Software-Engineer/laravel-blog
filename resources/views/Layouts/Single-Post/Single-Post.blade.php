<!DOCTYPE html>
<html lang="en">

@include('Layouts.header')

<body>

	@include('Layouts.nav')

	<div class="medium-gap single-post">
		<div class="container">
			<div class="row">
				<section id="single-post-content" class="col-lg-9 single-post-content">
					{{-- // single post  top ad section --}}
					@yield('top-ad')
					{{-- // end single post top ad  section--}}
					<article>
						<div class="cover-image">
							@yield('cover-image')
						</div>

						<div class="main-content">
							@yield('main-content')

							<div class="mt-2 text-center">
								@yield('code')
							</div>


							<div class="mt-2">
								@yield('video')
							</div>
						</div>
					</article>
					
						<div class="mt-2">
							@include('Layouts.quate')
						</div>
					{{-- // single post btoom ad section --}}
							@yield('bottom-ad')
					{{-- // end single post btoom ad section --}}

					
					@yield('author')

					@yield('comment')

				</section>

				 <aside id="side-bar-content" class="col-12 col-lg-3 side-bar-content">
				 	@include('Layouts.side-bar')
				 </aside>
			</div>
		</div>
	</div>

	@include('Layouts.footer')

	{{-- // comment js for single post --}}
	<script src="{{asset('assets/js/comment.js')}}"></script>

</body>
{{-- end body --}}
</html>
{{-- end html --}}