@extends('Layouts.master')

@section('SEO')
<title>Nasir Khan - Contact</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
@endsection

@section('main-container')

<section class="large-gap contact-me contact-version-two">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8">
        <div class="widget-sidebar contact-me">
          <div class="widget-header">
            <h4>Contact Me</h4>
          </div>
          <div class="widget-content">
            <div class="contact-form">
              <form id="contact" action="{{route('SendEmail')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>

                    @if(Session::has('success'))
                    <div class="alert alert-success mt-1">
                      {{Session::get('success')}}
                    </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger mt-1">
                            <ul>
                              
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget-sidebar about-me">
          <div class="widget-header">
            <h4>About Me</h4>
          </div>
          <div class="widget-content">
            <img src="http://placehold.it/310x180" alt="">
            <h6>Nasir Khan</h6>
            <p><b>P: </b> 23094820398</p>
            <p><b>E: </b> 23094820398</p>
            
            <ul class="social-icons">
              {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-codepen"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection