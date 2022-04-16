@extends('Frontend.layouts.master')
@section('title', "Add Book To The Library")

@section('content')
<div class="pagetitle">
  <h1 class='mb-4'>Manage Issued Books</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('library')}}">Library</a></li>
          <li class="breadcrumb-item active">Manage Issued Books</li>
      </ol>
  </nav>
</div><!-- End Page Title -->
<hr/>
<div class="scrollbar-x scrollbar-thin">
  <table class="table table-striped bg-light rounded table-sm" >
    <tr class="bg-dark">
      <th class="text-white">Book ID</th>
      <th class="text-white">Book Name</th>
      <th class="text-white">Student Name</th>
      <th class="text-white">Student Class</th>
      <th class="text-white">Student Roll</th>
      <th class="text-white">Issued Date</th>
      <th class="text-white">Return Date</th>
      <th class="text-white">Status</th>
      <th class="text-white">Actions</th>
    </tr>
    <tr>
      <td>1</td>
      <td>বিদ্রোহী</td>
      <td>Mahbub Rashid Tonoy</td>
      <td>4</td>
      <td>22</td>
      <td>22-03-2022</td>
      <td>30-03-2022</td>
      <td>Not Returned</td>
      <td class="book_action">
        <a href="#" title="Send Message"><i class="px-1 fa fa-commenting"></i></a>
        <a href="#" title="Received"><i class="px-1 fa fa-check-circle"></i></a>
        <a href="#" title="Edit Book"><i class="px-1 fa-solid fa-pencil"></i></a>
        <a href="#" onclick="removeCategory()" title="Delete Book"><i class="px-1 fa fa-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>1</td>
      <td>বিদ্রোহী</td>
      <td>Mahbub Rashid Tonoy</td>
      <td>4</td>
      <td>22</td>
      <td>22-03-2022</td>
      <td>30-03-2022</td>
      <td>Not Returned</td>
      <td class="book_action">
        <a href="#" title="Send Message"><i class="px-1 fa fa-commenting"></i></a>
        <a href="#" title="Received"><i class="px-1 fa fa-check-circle"></i></a>
        <a href="#" title="Edit Book"><i class="px-1 fa-solid fa-pencil"></i></a>
        <a href="#" onclick="removeCategory()" title="Delete Book"><i class="px-1 fa fa-trash"></i></a>
      </td>
    </tr>
    <tr>
      <td>1</td>
      <td>বিদ্রোহী</td>
      <td>Mahbub Rashid Tonoy</td>
      <td>4</td>
      <td>22</td>
      <td>22-03-2022</td>
      <td>30-03-2022</td>
      <td>Not Returned</td>
      <td class="book_action">
        <a href="#" title="Send Message"><i class="px-1 fa fa-commenting"></i></a>
        <a href="#" title="Received"><i class="px-1 fa fa-check-circle"></i></a>
        <a href="#" title="Edit Book"><i class="px-1 fa-solid fa-pencil"></i></a>
        <a href="#" onclick="removeCategory()" title="Delete Book"><i class="px-1 fa fa-trash"></i></a>
      </td>
    </tr>
  </table>
</div>
@endsection

@push('css')
<link rel='stylesheet' href="{{asset('Frontend/resources/css/library.css')}}" type="text/css" />
@endpush