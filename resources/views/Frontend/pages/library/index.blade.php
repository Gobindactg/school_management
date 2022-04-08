@extends('Frontend.layouts.master')
@section('title', "Library Dashboard")

@section('content')
<div class="row mb-4">
  <div class="col-lg-3 col-6">

    <div class="small-box" style='background-color: #17a2b8 !important'>
      <div class="inner">
        <h3>150</h3>
        <p>Books</p>
      </div>
      <div class="icon">
        <i class='bx bx-book-alt'></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
      <div class="inner">
        <h3>27</h3>
        <p>Categories</p>
      </div>
      <div class="icon">
        <i class='bx bx-category'></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
      <div class="inner">
        <h3 class='text-dark'>44</h3>
        <p class='text-dark'>Library Cards</p>
      </div>
      <div class="icon">
        <i class='bx bx-id-card'></i>
      </div>
      <a href="#" class="small-box-footer text-dark">More info <i class='bx bxs-right-arrow-circle'></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-6">

    <div class="small-box bg-danger">
      <div class="inner">
        <h3>5</h3>
        <p>Books Borrowed</p>
      </div>
      <div class="icon">
        <i class='bx bx-book-reader'></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
    </div>
  </div>

</div>
<div class="row">
  <div class="col-md-7">
    <div class="card">
      <div class="card-header">
        <span class="card-title">
          <i class='bx bx-book-alt'></i>
          Recently Added Books
        </span>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-sm m-0">
          <thead class='table-dark'>
            <tr>
              <th scope="col">Book Name</th>
              <th scope="col">Category</th>
              <th scope="col">Adding Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mark</td>
              <td>Otto</td>
              <td>10 Jan 2022</td>
            </tr>
            <tr>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>10 Jan 2022</td>
            </tr>
            <tr>
              <td>Larry the Bird</td>
              <td>Bird</td>
              <td>10 Jan 2022</td>
            </tr>
            <tr>
              <td>Full Stack Development</td>
              <td>Tech</td>
              <td>10 Jan 2022</td>
            </tr>
            <tr>
              <td>Object C++</td>
              <td>Tech</td>
              <td>10 Jan 2022</td>
            </tr>
            <tr>
              <td>Java Swing</td>
              <td>Programming</td>
              <td>10 Jan 2022</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer clearfix ms-auto p-0 pb-3 pe-4">
        <button type="button" class="btn btn-primary"><i style="font-size: 20px" class='bx bx-plus'></i>Add item</button>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
        <span class="card-title">
          <i class='bx bx-book-alt'></i>
          Library Cards
        </span>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul>
      </div>
      <div class="card-footer clearfix ms-auto p-0 pb-3 pe-4">
        <button type="button" class="btn btn-primary"><i style="font-size: 20px" class='bx bx-plus'></i>Add Library Card</button>
        </div>
    </div>
  </div>
  <div class="col-md-5">
    <div class="card">
      <div class="card-header">
        <span class="card-title">
          <i class='bx bx-book-alt'></i>
          All Categories
        </span>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
      </div>
      <div class="card-footer clearfix ms-auto p-0 pb-3 pe-4">
        <button type="button" class="btn btn-primary"><i style="font-size: 20px" class='bx bx-plus'></i>Add Categories</button>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
        <span class="card-title">
          <i class='bx bx-book-alt'></i>
          Borrowed Books
        </span>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul>
      </div>
      <div class="card-footer clearfix ms-auto p-0 pb-3 pe-4">
        <button type="button" class="btn btn-primary"><i style="font-size: 20px" class='bx bx-plus'></i>Add Item</button>
        </div>
    </div>
  </div>
</div>
@endsection

@push('css')
<link rel='stylesheet' href="{{asset('Frontend/resources/css/library.css')}}" type="text/css" />
@endpush