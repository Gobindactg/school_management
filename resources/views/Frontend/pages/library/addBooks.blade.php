@extends('Frontend.layouts.master')
@section('title', "Add Book To The Library")

@section('content')
<div class="pagetitle">
  <h1 class='mb-4'>Add New Book</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Library</a></li>
          <li class="breadcrumb-item active">Add New Book</li>
      </ol>
  </nav>
</div><!-- End Page Title -->
<div class="">
  <form>
    <div class="mb-3">
      <label for="book_name" class="form-label">Book Name</label>
      <input type="email" class="form-control" id="book_name" placeholder="অগ্নিবীণা, বাঁধন হারা ect">
    </div>
    <div class="mb-3">
      <label for="book_author" class="form-label">Author</label>
      <input type="email" class="form-control" id="book_author" placeholder="কাজী নজরুল ইসলাম">
    </div>
    <label for="book_quantity" class="form-label">Quantity</label>
    <div class="input-group mb-3">
      <input type="number" class="form-control" id="book_quantity" min='1' placeholder='1'>
      <span class="input-group-text" id="basic-addon2">Unit</span>
    </div>
    <div class="mb-3">
      <label for="book_category" class="form-label">Category</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Select Category</option>
        <option value="novel">Novel</option>
        <option value="history">History</option>
        <option value="tech">Tech</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary"><i class='bx bxs-book-add'></i> Add New Book</button>
  </form>
</div>
@endsection