@extends('Frontend.layouts.master')
@section('title', 'Manage Teachers')
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
        <h2 class="text-primary ">Manage Teacher</h2>
        @if (count($teachers) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Teacher Name</th>
                    <th>Teacher Title</th>
                    <th>Teacher Education</th>
                    <th>Teacher Subject</th>
                    <th>Teacher Address</th>
                    <th>Action</th>
                </tr>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>1</td>
                        <td>{{ $teacher->name }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <p style="text-center bg-dark text-white p-3">Nothing To Show</p>
        @endif
    </section>
@endsection
