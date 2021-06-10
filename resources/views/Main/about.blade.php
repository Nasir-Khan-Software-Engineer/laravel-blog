@extends('Layouts.master')

@section('SEO')
<title>About Us | Insidethediv</title>
<meta name="description" content="Insidethediv is a blogging website for Programming & Web Development. The main target of us is to provide the guideline and make the best online tutorial on programming and web development. All tutorial and source-code scripts are completely free.">
<meta name="keywords" content="About Us, Insidethediv">
@endsection
@section('CSS')
<style>
  h1{
    font-size:25px;
  }
  h2{
    font-size: 22px;
  }
  p{
    font-size:17px;
    text-align: justify;
  }
</style>

@endsection


@section('main-container')

<section class="large-gap about-me about-version-one">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="widget-sidebar about-me">
          <div class="widget-header">
            <h1>About Us | Insidethediv</h1>
          </div>
          <div class="widget-content">
            <div class="row">
              <div class="col-lg-4">
                <img style="width: 58% !important;" src="https://www.admin.insidethediv.com/assets/img/post/1623323595.jpg" alt="Nasir Khan">
              </div>
              <div class="col-lg-8">

                <p>
                  Insidethediv is a blogging website for Programming & Web Development. The main target of us is to provide the guideline and make the best online tutorial on programming and web development. All tutorial and source-code scripts are completely free.<br><br>
                </p>

                <p><b>We also provide some <a class="text-info" href="/service">services</a>.</b></p>  

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