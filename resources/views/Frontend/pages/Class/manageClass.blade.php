@extends('Frontend.layouts.master')
@section('title', 'All Classes')
@section('content')
<div class="pagetitle">
    <h1>All Classes</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('addClass')}}">Class Management</a></li>
            <li class="breadcrumb-item active">Manage Classes</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
 <h2 class="text-primary">Add New Class</h2>
 <form action="{{ route('addClass') }}" method="POST">
     @csrf
     <div class="mb-3">
         <label for="class_name" class="form-label text-primary">Class Name</label>
         <input type="text" class="form-control" id="class_name" placeholder="Example: প্রথম, দ্বিতীয়, তৃতীয়..."
             name="class_name">
     </div>

     <button type="submit" class="btn btn-primary">Add Class</button>
 </form>
</section>
    <section class="section dashboard mt-4">
        <h2 class="text-primary ">All Classes</h2>
        @if(count($classes) > 0)
        <table class="table table-striped table-sm bg-white">
            <tr class="bg-dark">
                <th class="text-white text-center">ID</th>
                <th class="text-white">Class Name</th>
                <th class="text-white text-center">Action</th>
            </tr>
            @foreach($classes as $class)
            <tr>
                <td style="width: 80px;" class="text-center">{{$class->id}}</td>
                <td>{{$class->class_name}}</td>
                <td style="width: 120px;" class="text-center">
                    <form method="POST" action="{{route('deleteClass')}}">
                        @csrf
                        <input type="hidden" value="{{$class->id}}" name="class_id" />
                        <button type="submit" class="text-dark bg-transparent border-0" title="Delete Class">
                            <i class='bx bxs-trash fs-5' ></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
        @else
            <p class="fs-3 text-center">Nothing To Show</p>
        @endif
    </section>
@endsection
