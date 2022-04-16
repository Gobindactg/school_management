<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield("title")</title>
    @include('Frontend.landing.partials.meta')

    @include('Frontend.landing.partials.css')

  </head>

  <body>
    @include('Frontend.landing.partials.navbar')
    
    @yield('content')
    

    @include('Frontend.landing.partials.footer')
    @include('Frontend.landing.partials.js')

  </body>
</html>
