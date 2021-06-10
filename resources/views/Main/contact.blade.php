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
            <h4>Contact Us 👇</h4>
          </div>
          <div class="widget-content">
            <div class="contact-form">
              {{-- <form id="contact" action="{{route('SendEmail')}}" method="POST"> --}}
                {{-- @csrf --}}
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." >
                      <p><b>Note: </b> Max 100 characters & Min 3 characters.</p>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." >
                      <p><b>Note: </b> Max 200 characters & Min 10 characters.</p>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." >
                      <p><b>Note: </b> Max 200 characters & Min 10 characters.</p>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." ></textarea>
                      <p><b>Note: </b> Max 500 characters & Min 10 characters.</p>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="button" id="contact_btn" class="filled-button spinn-btn">
                        <div id="contact_spinner" class="spinner-border text-light spinner" role="status">
                          <span class="sr-only">Loading...</span>
                        </div> 
                        Send Message
                      </button>
                    </fieldset>

                    <div class="py-2" id="contact_message">
                      
                    </div>

                  </div>
                </div>
              {{-- </form> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget-sidebar about-me">
          <div class="widget-header">
            <h4>About Us ✍</h4>
          </div>
          <div class="widget-content">
            <img style="width: 58% !important;" src="https://www.admin.insidethediv.com/assets/img/post/1623323595.jpg" alt="InsideTheDiv">
            <h6>InsideTheDiv</h6>
            <p><b>📞 👉</b> 23094820398</p>
            <p><b>✉ 👉</b> 23094820398</p>
            
            @include('Layouts.socialIcon')


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('js')
  <script src="{{asset('assets/js/email.js')}}"></script>
@endsection