@extends('Layouts.master')

@section('SEO')
<title>Our Supported Mail Domain</title>
<meta name="description" content="Our Supported Mail Domain">
<meta name="keywords" content="valid email domain">
@endsection

@section('CSS')
  <style>
    #supported-email-list li{
      display: inline-block;
      padding: 3px 10px;
      background: #d8d7d7;
      margin: 5px;
      border-radius: 5px;
    }
  </style>
@endsection

@section('main-container')
@php
  // $posts = Session::get('search_result');
@endphp
<section class="large-gap contact-me contact-version-two">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12">
        
          
        <div class="border p-3">
          <h1 style="font-size: 24px" class="text-center py-3">Our Supported Mail Domain</h1>

        <ol id="supported-email-list">
        </ol>


      </div>
    </div>
  </div>
</section>

@endsection

@section('js')
  <script>
    var supported_list_ol = document.getElementById('supported-email-list');
    var list = '';
    for(var i=0; i< valid_domains.length; i++){

      list += '<li> ✅  '+valid_domains[i]+'</li>';
    
    }

    // alert(supported_list_ol);
    supported_list_ol.innerHTML = list;
  </script>
@endsection