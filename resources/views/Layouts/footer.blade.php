

    <footer class="mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="footer-social-icons">
              <li><a href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
              <li><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
              <li><a href="#"><i class="fa fa-github"></i> Github</a></li>
              <li><a href="#"><i class="fa fa-codepen"></i> Codepen</a></li>
              <li><a href="#"><i class="fa fa-jsfiddle"></i> Facebook</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>all rights reserved. <a href="#">Nasir Khan</a> 2021.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/scroll.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    @yield('js')
    @yield('custom-footer-content')