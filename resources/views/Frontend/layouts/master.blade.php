<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- =======Start Css ======= -->
    @include('Frontend.partial.css')
    @stack('css')
    <!-- =======End Css ======= -->
    <style>
        body {
            background-image: url("{{ asset('sliderImage/background.png') }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

    </style>

</head>

<body class="body_img">

    <!-- Start Header -->
    @include('Frontend.partial.header')
    <!-- End Header -->

    <!-- Start Sidebar-->
    @include('Frontend.partial.sidebar')
    <!-- End Sidebar-->
    <!-- start All Section-->
    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->
    <!-- End All Section-->

    <!-- Start Footer  -->
    @include('Frontend.partial.footer')
    <!--  End Footer  -->

    <!-- Start Js -->
    @include('Frontend.partial.js')
    @stack('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End Js -->
</body>

</html>
