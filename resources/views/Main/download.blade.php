@extends('Layouts.master')

@section('SEO')
<title>Download Complete Source Code of </title>
<meta name="description" content="Download Free Source Code of {{$title}}">
<meta name="keywords" content="Free web source code, free web source code, web project with free source code">
@endsection

@section('main-container')

<section class="large-gap contact-me contact-version-two">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12">
        <div class="widget-sidebar contact-me">
          <div class="widget-header">
            <h1 style="font-size: 24px;">Download Free Source Code</h1>
          </div>
          <div class="widget-content">
            <div class="contact-form">
              

                <div class="row pb-3">
                  <div class="col-12 text-center">
                    <h2 id="post-title" data-id="{{$id}}" style="font-size: 20px;">{{$title}}</h2>
                  </div>

                  <div class="col-12">
                    <h2 style="font-size: 20px;">💂: How to Download Free 💲💲💲</h2> <br>

                    <p style="font-size: 18px;">
                      👉 Please fill up the form completely. 👇<br>
                      👉 Use Your Valid Email Address.<br>
                      👉 <b>Source Code Will Send to Yor Email Automatically</b>.<br>
                      👉 It will take just 5 to 10 seconds<br>
                    </p>
                  </div>

                </div>
                <div class="row">

                  <div class="col-12 col-lg-6 offset-lg-3  p-3">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" class="form-control border border-dark" id="name" placeholder="Your name..." >
                          <p><b>Note: </b> Max 100 characters & Min 3 characters.</p>
                        </fieldset>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="email" type="text" class="form-control border border-dark" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." >
                          <p><b>Note: </b> Max 200 characters & Min 10 characters.</p>
                        </fieldset>
                      </div>

                      <div class="col-lg-12">
                        <fieldset>
                          <button type="button" id="download_btn" class="filled-button spinn-btn">
                            <div id="code_spinner" class="spinner-border text-light spinner" role="status">
                              <span class="sr-only">Loading...</span>
                            </div> 
                            Send Me Code
                          </button>
                        </fieldset>

                        <div class="py-2" id="download_message">
                          
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-12">
                    <h3 style="font-size: 18px;">💂: Message For You</h3> <br>

                    <p style="font-size: 16px;">
                      👉 If you concern about your data, please read our  <a  class="text-info"  href="{{route('Privacy')}}">🔒 PRIVACY POLICY</a>.<br>
                      👉 If you think why we take data data, Please read our <a class="text-info"   href="{{route('Condition')}}">🔗 TERMS AND CONDITION</a>.<br>
                      💂: Feel Free To <a class="text-info"   href="{{route('Contact')}}">⛽ CONTACT</a> with us.<br>
                     
                    </p>
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

@section('js')
  <script src="{{asset('assets/js/download.js')}}"></script>
@endsection