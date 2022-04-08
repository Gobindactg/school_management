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
</head>

<body>

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
{{-- <<<<<<< HEAD
    
    <!-- Start Footer  -->
    @include('Frontend.partial.footer')
    <!--  End Footer  -->

    <!-- Start Js -->
    @include('Frontend.partial.js')
    @stack('js')
======= --}}
    <!-- =======Start Footer ======= -->
    @include('Frontend.partial.footer')
    <!-- ======= End Footer ======= -->
    @include('Frontend.partial.js')
    <!-- Start Js -->
    @yield('script')
    
{{-- >>>>>>> gobinda --}}
    <!-- End Js -->
    @include('Frontend.partial.scripts')
</body>

</html>
