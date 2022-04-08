<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>School Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- =======Start Css ======= -->
    @include('Frontend.partial.css')
    @stack('css')
    <!-- =======End Css ======= -->
    <style>
        body{
            background-image: url("{{ asset('sliderImage/background.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
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
    <!-- =======Start Footer ======= -->
    @include('Frontend.partial.footer')
    <!-- ======= End Footer ======= -->
    @include('Frontend.partial.js')
    <!-- Start Js -->
    @yield('script')
    
    <!-- End Js -->
    @include('Frontend.partial.scripts')
</body>

</html>
