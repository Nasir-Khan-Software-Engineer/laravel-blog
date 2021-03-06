  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Nasir Khan">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link rel="icon" href="https://www.admin.insidethediv.com/assets/img/post/1623326768.jpg" type="image/png" sizes="16x16">
    @yield('SEO')

    <!-- Fonts -->
{{--     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/elegant-font/style.css"> --}}

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer=""></script>
    
    @yield('CSS')

    @php 
        // check is it single post or not
        $route_name = Route::current()->getName();
    @endphp
    @if(str_contains($route_name, 'Single_Post'))
        <link rel="stylesheet" href="{{asset('assets/css/single-post.css')}}" />
    @endif

        

    @yield('custom-header-content')

  </head>