    <!-- Mobile Menu -->
    <div class="mobile-nav-wrapper">
      <div class="mobile-menu-inner">

        <ul class="mobile-menu">

          <li class="@if(Request::is('/')) active @endif "><a href="{{route('Home')}}">Home</a></li>
          <li class="@if(Request::is('front-end/*')) active @endif" ><a href="{{route('FrontEnd.page_1')}}">FrontEnd</a></li>
          <li class="@if(Request::is('back-end/*')) active @endif" ><a href="{{route('BackEnd.page_1')}}">BackEndEnd</a></li>
          <li class="@if(Request::is('other/*')) active @endif" ><a href="{{route('Other.page_1')}}">Other</a></li>
          <li class="@if(Request::is('about')) active @endif"><a href="{{route('About')}}">About</a></li>
          <li class="@if(Request::is('contact')) active @endif"><a href="{{route('Contact')}}">Contact Us</a></li>

        </ul>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <section class="above-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 align-self-center">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-codepen"></i></a></li>
              <li><a href="#"><i class="fa fa-jsfiddle"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-4 align-self-center">
            <div class="logo">
              <a href="/">
                Nasir Khan
              </a>
              
            </div>
          </div>
          <div class="col-lg-4  nav-image">
            <a class="active" href="{{route('About')}}">
              <img src="{{asset('assets/image/nasir-khan.jpg')}}" alt="nasir-khan">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Header -->
    <header class="site-header fixed-header">
      <div class="container expanded">
        <div class="header-wrap">
          <div class="header-logo">
            {{-- //logo --}}
          </div>
          <div class="header-nav">
              <ul class="main-menu">

                <li class="@if(Request::is('/')) active @endif "><a href="{{route('Home')}}">Home</a></li>
                <li class="@if(Request::is('front-end/*')) active @endif" ><a href="{{route('FrontEnd.page_1')}}">FrontEnd</a></li>
                <li class="@if(Request::is('back-end/*')) active @endif" ><a href="{{route('BackEnd.page_1')}}">BackEndEnd</a></li>
                <li class="@if(Request::is('other/*')) active @endif" ><a href="{{route('Other.page_1')}}">Other</a></li>
                <li class="@if(Request::is('about')) active @endif"><a href="{{route('About')}}">About</a></li>
                <li class="@if(Request::is('contact')) active @endif"><a href="{{route('Contact')}}">Contact Us</a></li>
                
              </ul>    
          </div>
          <div class="header-widgets">
            <a class="@if(Request::is('/')) active @endif" href="{{route('Home')}}">
              <img src="{{asset('assets/image/nasir-khan.jpg')}}" alt="nasir-khan">
            </a>

            <ul class="right-menu">
              <li class="menu-item menu-mobile-nav">
                <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                  <span class="hamburger"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- /Header -->



