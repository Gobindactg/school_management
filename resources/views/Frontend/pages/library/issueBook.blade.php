@extends('Frontend.layouts.master')
@section('title', "Add Book To The Library")

@section('content')
<div class="pagetitle">
  <h1 class='mb-4'>Issue A New Book</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Library</a></li>
          <li class="breadcrumb-item active">Issue A New Book</li>
      </ol>
  </nav>
</div><!-- End Page Title -->
<div>
  <form>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="library_card_no" class="form-label">Library Card No</label>
          <input type="number" class="form-control" id="library_card_no" placeholder="eg: 000012345678">
        </div>
        <div class="mb-3">
          <label for="student_class" class="form-label">Student Class</label>
          <input type="text" class="form-control" id="student_class" placeholder="eg: 5">
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="student_roll" class="form-label">Student Roll</label>
          <input type="text" class="form-control" id="student_roll" placeholder="eg: 56">
        </div>
        <div class="mb-3">
          <label for="book_id" class="form-label">Book ID</label>
          <input type="number" class="form-control" min="1" id="book_id" placeholder="eg: 452">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection

@push('css')
<link rel='stylesheet' href="{{asset('Frontend/resources/css/library.css')}}" type="text/css" />
@endpush