@extends('Frontend.layouts.master')
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
        <h2 class="text-primary">Manage Institution Information</h2>
       <table class="table table-bordered">
           <tr>
               <th>#</th>
               <th>Institution Name</th>
               <th>Institution Address</th>
               <th>Institution EMIS</th>
               <th>Institution Logo</th>
               <th>Action</th>
           </tr>
           @foreach ($institution as $institution)
           <tr>
               <td>#</td>
               <td>{{$institution->name}}</td>
               <td>{{$institution->address}}</td>
               <td>{{$institution->emis_number}} </td>
               <td class="text-center">
                <img src="{{ asset('institutionImage/' . $institution->image) }}" class="card-img-top "
                alt="{{ $institution->name }}" style="width:80px;">
               </td>
               <td>
                   <a href="{{route('edit.institution', $institution->id)}}" class="btn btn-primary">Edit</a>
                   <a href="#" class="btn btn-danger">Delete</a>
               </td>
           </tr>
           @endforeach
       </table>
    </section>
@endsection