@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

    <div class="container" style="padding: 0; margin:0;">
        <div class="row bg-info" style="margin-bottom: 15px">
            <div class="col-md-4 ">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Class</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Section</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Year</option>
                    <option value="1">2022</option>
                    <option value="2">2021</option>
                    <option value="3">2020</option>
                </select>
            </div>

        </div>
        <div class="container scrollbar-thin scrollbar-x">
          {{-- <table class="table table-bordered text-center">
              <thead>
                  <tr>
                      <th>S.L</th>
                      <th>Class</th>
                      <th>Roll</th>
                      <th>Year</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($marks as $marks)
                  <tr>
                      <td>#</td>
                      <td>{{$marks->class}}</td>
                      <td>{{$marks->st_roll}}</td>
                      <td>{{$marks->st_year}}</td>
                      <td>{{$marks->name}}</td>
                      <td class="text-center hover"> <a href="{{ route('singleResult', $marks->id) }}" target="_blank" class="btn btn-primary btn-lg w-100 ">Go</a></td>
                    
                  </tr>
                  @endforeach
              </tbody>
          </table> --}}
         
        </div>


    @endsection
