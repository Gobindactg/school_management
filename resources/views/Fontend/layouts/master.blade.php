<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>School Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- =======Start Css ======= -->
    @include('Fontend.partial.css')
    <!-- =======End Css ======= -->

</head>

<body>

    <!-- Start Header -->
    @include('Fontend.partial.header')
    <!-- End Header -->

    <!-- Start Sidebar-->
    @include('Fontend.partial.sidebar')
    <!-- End Sidebar-->
    <!-- start All Section-->
    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->
    <!-- End All Section-->
    <!-- =======Start Footer ======= -->
    @include('Fontend.partial.footer')
    <!-- ======= End Footer ======= -->

    <!-- Start Js -->
    @include('Fontend.partial.js')
    <!-- End Js -->

</body>

</html>
