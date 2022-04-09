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
            <tr>
                <td>1</td>
                <td>Gobinda Das</td>
                <td>Assistant Teacher</td>
                <td>MBS</td>
                <td>English</td>
                <td>Jonnardonpur, Chaitennerhat, Mirsarai</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
    </section>
@endsection