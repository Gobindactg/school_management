@extends('Fontend.layouts.master')
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
        <form action="#" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Teacher Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Teacher Name" name="instution_name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Teacher Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Institution Name" name="instution_name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Institution Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="institution_address" placeholder="Write Your Institution Address">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Institution EMIS</label>
              <input type="number" class="form-control" id="institution_emis" name="institution_emis" placeholder="Write Your Institution EMIS">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Institution Logo</label>
              <input type="file" class="form-control" id="institution_logo" name="institution_logo" placeholder="Write Your Institution EMIS">
            </div>
            
            <button type="submit" class="btn btn-primary">Add Info</button>
          </form>
    </section>
@endsection