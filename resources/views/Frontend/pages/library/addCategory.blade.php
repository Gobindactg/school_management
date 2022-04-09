@extends('Frontend.layouts.master')
@section('title', "Add Book To The Library")

@section('content')
<div class="pagetitle">
  <h1 class='mb-4'>Add Book Category</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Library</a></li>
          <li class="breadcrumb-item active">Add Book Category</li>
      </ol>
  </nav>
</div><!-- End Page Title -->
<div class="row">
  <div class="col-md-9">
    <form>
      <div class="mb-3">
        <label for="category_name" class="form-label">Category Name</label>
        <input type="email" class="form-control" id="book_name" placeholder="Novel, Technology ect">
      </div>
      <div class="mb-3">
        <label for="category_prefix" class="form-label">Category Prefix</label>
        <input type="text" class="form-control" id="book_quantity" placeholder="rabindranath_novel_">
      </div>
      <button type="submit" class="btn btn-primary"><i class='bx bxs-book-add'></i> Add New Category</button>
    </form>
  </div>
  <div class="col-md-3 bg-light p-3 rounded book_category_list">
    <b>Categories</b>
    <hr/>
    <ul>
      <li>
        <span>Novel</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Fiction</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Technology</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Education</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Academic</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Novel</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Fiction</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Technology</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Education</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
      <li>
        <span>Academic</span>
        <span class="trash_btn" onclick="removeCategory()"><i class='bx bxs-trash'></i></span>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('css')
<link rel='stylesheet' href="{{asset('Frontend/resources/css/library.css')}}" type="text/css" />
@endpush