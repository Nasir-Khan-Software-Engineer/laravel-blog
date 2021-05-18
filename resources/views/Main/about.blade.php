@extends('Layouts.master')

@section('SEO')
<title>Nasir Khan - Contact</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
@endsection

@section('main-container')

<section class="large-gap about-me about-version-one">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="widget-sidebar about-me">
          <div class="widget-header">
            <h4>About Me</h4>
          </div>
          <div class="widget-content">
            <div class="row">
              <div class="col-lg-4">
                <img style="width: 58% !important;" src="{{asset('assets/image/nasir-khan.jpg')}}" alt="Nasir Khan">
              </div>
              <div class="col-lg-8">

                I love to introduce myself as a <b>FullStack web developer</b>, and I am using PHP(Laravel) for more than 2 years. In my university's first two years I was involved in competitive programming(using c/c++), and that's why now I can learn new technology so quickly. Also, like to share(Blogging and YouTube ) my skill to other. <br>

                <strong>
                  Always try to learn new technology and it actually easy for me.
                </strong>


                

                @include('Layouts.socialIcon')

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection