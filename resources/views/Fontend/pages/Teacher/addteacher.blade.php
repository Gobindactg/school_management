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
      <h2 class="text-primary ">Add New Teacher</h2>
        <form action="#" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-primary">Teacher Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Teacher Name" name="teacher_name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-primary">Teacher Title</label>
             <select name="teacher_title" id="" class="form-control">
               <option value="">-- Select Teacher Title --</option>
               <option value="head_teacher"> Head Teacher </option>
               <option value="assistant_head_teacher">Assistant Head Teacher</option>
               <option value="assistant_teacher"> Assistant Teacher</option>
             </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-primary">Teacher Education</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="teacher_education" placeholder="Write Teacher Education">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-primary">Teacher Subject</label>
              <input type="number" class="form-control" id="institution_emis" name="teacher_subject" placeholder="Write Teacher Subject">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-primary">Teacher Address</label>

                <textarea  cols="30" rows="6" class="form-control" name="teacher_address" placeholder="Write Teacher Address"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Info</button>
          </form>
    </section>
@endsection