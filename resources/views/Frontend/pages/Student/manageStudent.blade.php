@extends('Frontend.layouts.master')
@section('title', 'Manage Students')
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

<section class="section dashboard">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-primary ">Manage Teacher</h2>
        </div>
        <div class="col-md-6">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>


    <table class="table table-bordered text-center">
        <tr class="bg-info">
            <th>S.L</th>
            <th>Class</th>
            <th>Roll</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @foreach ($totalStudent as $student)
        <tr>
            <td>{{+$loop->index+1}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->st_roll}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->father_name}}</td>
            <td>{{$student->mother_name}}</td>
            <td>{{$student->address}}</td>
            <td>
                <a href="#" class="btn btn-primary">Details</a>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="{{route('studentDelete', $student->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</section>
@endsection