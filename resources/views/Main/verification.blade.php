@extends('Layouts.master')

@section('SEO')
<title>insideTheDiv</title>
<meta name="description" content="user verification">
<meta name="keywords" content="user verification">
@endsection

@section('main-container')

<section class="large-gap about-me about-version-one">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="widget-sidebar about-me">
          <div class="widget-header">
            <h1>User verification</h1>
          </div>
          <div class="widget-content">
            <div class="row">


              @if($data['user'])
                <div class="col-12">
                  <div class="col-12">
                    <div class="alert alert-success" role="alert">
                      <h2 class="alert-heading">Congratulations, {{$data['user']['name']}}</h2> <br>
                      <h4>Your Email Verified Successfully</h4>
                      <p>
                        <ul>
                          <li>Now you can comment without Verification.</li>
                          <li>But you comment will show after admin review.</li>
                        </ul>
                      </p>
                      <hr>
                      <p class="mb-0">Feel Free to <a class="text-info" href="/contact">Contact</a> With Us</p>
                    </div>
                  </div>
                </div>
              @else
                <div class="col-12">
                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">User Not Found</h4>
                    <p>
                      <ul>
                        <li>Check Your Email Address Please</li>
                      </ul>
                    </p>
                    <hr>
                    <p class="mb-0">Please <a href="/contact">Contact</a> With Us</p>
                  </div>
                </div>
              @endif


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection