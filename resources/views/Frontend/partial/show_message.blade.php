@extends('Frontend.layouts.master')
@section('title', 'message')
@section('content')
<div class="container py-1">
    @foreach ($social as $social)
    <div class="card card-body my-1">
        <h3 class="text-primary pt-2">{{$social->title}}</h3>
        <p style="background-color:rgb(221, 218, 218)">{{$social->description}}</p>
    </div>
    @endforeach
 
</div>
@endsection