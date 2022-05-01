@extends('Frontend.layouts.master')
@section('title', 'Add Subject')
@section('content')
    <div class="pagetitle">
        <h1>Add New Subject</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('addSubject')}}">Subject Management</a></li>
                <li class="breadcrumb-item active">Add New Subject</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <h2 class="text-primary ">Add New Subject</h2>
        <form action="#" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-primary">Subject Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Subject Name" name="Subject_name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-primary">Subject Class</label>
              <select class="form-control" id="subject_class" name="subject_class">
                <option value="">----Select Class----</option>
                <option value="0">Play</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Subject</button>
          </form>
    </section>
@endsection