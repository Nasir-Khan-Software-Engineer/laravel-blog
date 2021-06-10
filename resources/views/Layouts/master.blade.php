<!DOCTYPE html>
<html lang="en">

  @include('Layouts.header')

  <body>

  @include('Layouts.nav')
  @include('cookie-consent::index')
  @yield('main-container')
  
  @include('Layouts.footer')

  </body>
  {{-- end body --}}
</html>
{{-- end html --}}