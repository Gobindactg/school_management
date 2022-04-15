@extends('Frontend.layouts.master')
@section('title', 'Manage Social Media || Noipunno Digital')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Institution</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<h2>Manage Social Media Link</h2>
<hr>
<div class=" container scrollbar-thin scrollbar-x w-100">
<table class="table table-bordered ">
    <thead>
        <tr class="bg-dark">
            <th>Serial</th>
            <th>Social Name</th>
            <th>Social Link</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($social as $social)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$social->name}}</td>
            <td>{{$social->media_link}}</td>
            <td class="text-center">
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection