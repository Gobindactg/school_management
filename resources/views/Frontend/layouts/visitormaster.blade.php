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
    <!-- =======End Css ======= -->
    <style>
        body{
            background-image: url("{{ asset('sliderImage/background.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body class="hero_image">

    <!-- Start Header -->
    @include('Frontend.pages.Visitor.partial.header')
    <!-- End Header -->
    @include('Frontend.pages.Visitor.partial.slider')
    <!-- Start Sidebar-->
    {{-- @include('Frontend.pages.Visitor.partial.sidebar') --}}
    <!-- End Sidebar-->
    <div class="row">
        <div class="col-md-2 text-center mt-2">
            @include('Frontend.pages.Visitor.partial.sidemenu')
        </div>
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-2 text-center mt-2">
            @include('Frontend.pages.Visitor.partial.noties')
        </div>
    </div>

    <!-- start All Section-->

    @include('Frontend.pages.Visitor.partial.footer')
    <!-- End All Section-->
    <!-- =======Start Footer ======= -->

    <!-- ======= End Footer ======= -->
    @include('Frontend.partial.js')
    <!-- Start Js -->
    @yield('script')

    <!-- End Js -->
    @include('Frontend.partial.scripts')
</body>

</html>
