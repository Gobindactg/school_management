@extends('Frontend.layouts.master')
@section('title', 'Add Class Group')
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
    <h2 class="text-primary">Add Class Group</h2>
    @include('Frontend.partial.message')
    <form action="{{ route('group_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Add Class Group</label>
            <input type="text" class="form-control" id="class_group" aria-describedby="emailHelp"
            placeholder="Pleace Enter Class Group Name" name="class_group">
        </div>
             
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-primary">Accademic Year</label>
            <select name="st_year" id="" class="form-control">
                <option value="">-- Select Accademic Year --</option>
                <option value="2022"> 2022 </option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-lg">Add Class Group</button>
    </form>
</section>
@endsection