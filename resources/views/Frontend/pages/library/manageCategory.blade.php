@extends('Frontend.layouts.master')
@section('title', "Manage Categories")

@section('content')
<div class="pagetitle">
  <h1 class='mb-4'>Manage Book Categories</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Library</a></li>
          <li class="breadcrumb-item active">Manage Book Categories</li>
      </ol>
  </nav>
</div><!-- End Page Title -->
  <div>
    <form>
      <div class="mb-3">
        <label for="category_name" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="category_name" placeholder="Novel, Technology ect">
      </div>
      <div class="mb-3">
        <label for="category_slug" class="form-label">Category slug</label>
        <input type="text" class="form-control" pattern="[a-zA-Z0-9_-]+" id="category_slug" placeholder="only alphabets, numbers, - and _ allowed">
      </div>
      <button type="submit" class="btn btn-primary"><i class='bx bxs-book-add'></i> Add New Category</button>
    </form>
  </div>
  <div class="mt-3 book_category_list">
    <h3>Categories</h3>
    <hr/>
    <table class="table table-striped bg-light">
      <tr class="bg-dark">
        <th class="text-white">Category Name</th>
        <th class="text-white">Category Slug</th>
        <th class="text-white">Total Books</th>
        <th class="text-white text-center">Actions</th>
      </tr>
      <tr>
        <td>কাব্যগ্রন্থ</td>
        <td>poem</td>
        <td>10</td>
        <td class="book_action">
          <a href="#" title="Show All Books"><i class="fa fa-folder-open-o"></i></a>
          <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
          <a href="#" onclick="removeCategory()" title="Delete Book"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <tr>
        <td>উপন্যাস</td>
        <td>novel</td>
        <td>10</td>
        <td class="book_action">
          <a href="#" title="Show All Books"><i class="fa fa-folder-open-o"></i></a>
          <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
          <a href="#" onclick="removeCategory()" title="Delete Book"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <tr>
        <td>প্রযুক্তি</td>
        <td>technology</td>
        <td>10</td>
        <td class="book_action">
          <a href="#" title="Show All Books"><i class="fa fa-folder-open-o"></i></a>
          <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
          <a href="#" onclick="removeCategory()" title="Delete Book"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <tr>
        <td>গল্পগ্রন্থ</td>
        <td>story</td>
        <td>10</td>
        <td class="book_action">
          <a href="#" title="Show All Books"><i class="fa fa-folder-open-o"></i></a>
          <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
          <a href="#" onclick="removeCategory()" title="Delete Book"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <tr>
        <td>পাঠ্যপুস্তক</td>
        <td>text_book</td>
        <td>10</td>
        <td class="book_action">
          <a href="#" title="Show All Books"><i class="fa fa-folder-open-o"></i></a>
          <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
          <a href="#" onclick="removeCategory()" title="Delete Book"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
    </table>
  </div>

@endsection

@push('css')
<link rel='stylesheet' href="{{asset('Frontend/resources/css/library.css')}}" type="text/css" />
@endpush