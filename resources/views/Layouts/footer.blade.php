

    <footer class="mt-4">
      <div class="container">



        <div class="row pb-4">
          <div class="col-12 col-lg-6 offset-lg-3">
            <h5 class="text-center text-light pb-2">
              Get Newsletter 👇
              <div id="subscribe_spnner" class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </h5>

            <div class="input-group">
              <div class="input-group-prepend">
                <button id="subscribe_btn" class="btn btn-primary" type="button">

                  Subscribe
                </button>
              </div>
              <label for="subscriber_name" class="d-none">Your Email</label>
              <input id="subscriber_name" type="text" class="form-control" placeholder="Your Name">
              <label for="subscriber_email" class="d-none">Your Email</label>
              <input id="subscriber_email" type="text" class="form-control" placeholder="Your Valid Email">
            </div>

            <p id="subscribe_message" class="text-light">
              
            </p>

          </div>

        </div>


        <div class="row">
          <div class="col-lg-12">
            <ul class="footer-social-icons">
              <li><a href="{{route('Contact')}}">⛽ Contact</a></li>
              <li><a href="{{route('About')}}">✍ About Us</a></li>
              <li><a href="{{route('Service')}}">☕ Work With Us</a></li>
              <li><a href="{{route('Condition')}}">🔗 Terms and Condition</a></li>
              <li><a href="{{route('Privacy')}}">🔒 Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>&copy; all rights reserved. <a href="#">InsideTheDiv</a> 2021.</p>
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
    <script src="{{asset('assets/js/subscribe.js')}}"></script>

    @yield('js')
    @yield('custom-footer-content')