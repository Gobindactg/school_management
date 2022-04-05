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
    
    <!-- Start Footer  -->
    @include('Frontend.partial.footer')
    <!--  End Footer  -->

    <!-- Start Js -->
    @include('Frontend.partial.js')
    <!-- End Js -->

</body>

</html>
