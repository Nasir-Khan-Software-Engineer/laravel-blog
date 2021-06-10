@extends('Layouts.master')

@section('SEO')
<title>{{count($posts)}} Search Rresults Found For {{$keyword}}</title>
<meta name="description" content="{{count($posts)}} Search Rresults Found For {{$keyword}}">
<meta name="keywords" content="{{count($posts)}} Search Rresults Found For {{$keyword}}">
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
          <h1 style="font-size: 24px" class="text-center py-3">{{count($posts)}} Search Rresults Found For {{$keyword}}</h1>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $index => $post)
              <tr>
                <th>{{$index + 1}}</th>
                <td><a class="text-primary" href="{{$post['url']}}">{{$post['title']}}</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>

        </div>
          
          

        


      </div>
    </div>
  </div>
</section>

@endsection

@section('js')
  
@endsection