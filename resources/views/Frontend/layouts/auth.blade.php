<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- =======Start Css ======= -->
  @include('Frontend.partial.css')
  <style>
    .container {
      margin-top: 100px;
    }
    .card-header {
      margin-bottom: 20px;
    }
    #footer {
      margin-left: 0px;
    }
  </style>
  <!-- =======End Css ======= -->
</head>
<body>
  <!-- Start Header -->
  @include('Frontend.partial.header')
  <!-- End Header -->
  @yield('content')

    <!-- Start Footer  -->
    @include('Frontend.partial.footer')
    <!--  End Footer  -->
    <!-- Start Js -->
    @include('Frontend.partial.js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End Js -->
</body>
</html>