{{-- @extends('Frontend.layouts.master')
@section('title', 'Add Institute')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hold On | Noipunno Digital School</title>
    @include('Frontend.partial.css')
    <style>
        .body_img {
            background-image: url("{{ asset('sliderImage/background.png') }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    
    </style>
</head>
<body class="body_img">
@include('Frontend.partial.header')
<div class="container py-3 card card-body mt-5" style="background-color: rgb(180, 182, 255)">

<h1 class="text-center">Welcome To Noipunno Digital School</h1>
@include('Frontend.partial.message')
<section class="section dashboard">
    <h2 class="text-white text-center">Thank You For Applying!!</h2>
    <p class="text-center">The Institution Administrator Will Approve Your Request soon. Please Hold On.</p>
</section>
@include('Frontend.partial.js')
@include('Frontend.partial.scripts')
</div>
    
</body>
</html>
{{-- @endsection --}}