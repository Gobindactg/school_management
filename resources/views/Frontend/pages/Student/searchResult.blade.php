@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

       <div class="container my-2 ">
                <div class="row">
                    
                        <div class="col-md-2">
                            <form action="{{route('searchResult')}}" method="get">
                            <select class="form-select " id="exampleFormControlSelect1" name="class">
                                <option selected value="">--Select Class--</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select " id="exampleFormControlSelect1" name="group">
                             <option value="">-- Select Student Group --</option>
                            @foreach (App\Models\StudentGroup::class_group() as $group)   
                            <option value="{{$group->name}}"> {{$group->name}} </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select " id="exampleFormControlSelect1" name="year">
                                <option selected value="">Select Year</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="exam_title" id=""  class="form-select " >
                                    <option value="">Select Exam </option>
                                    <option value="first_terminal"> First Terminal Exam</option>
                                    <option value="second_terminal">Second Terminal Exam</option>
                                    <option value="annual_exam">Annual Eam</option>
                                </select>
                        </div>
                      
                        <div class="col-md-3">
                           <input type="submit" value="Search" class="btn btn-info w-100">
                           </form>
                        </div>
                    
                </div>
            </div> 
  
        <div class="container scrollbar-thin scrollbar-x">
           <table class="table table-bordered text-center">
              <thead>
                  <tr>
                      <th>S.L</th>
                      <th>Class</th>
                      <th>Group</th>
                      <th>Roll</th>
                      <th>Year</th>
                      <th>Name</th>
                      <th>Additional Subject</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($marks as $marks)
                  <tr style="padding:0; margin:0">
                      <td  style="padding:0; margin:0">{{+$loop->index+1}}</td>
                      <td  style="padding:0; margin:0">{{$marks->class}}</td>
                      <td  style="padding:0; margin:0">{{$marks->st_group}}</td>
                      <td  style="padding:0; margin:0">{{$marks->st_roll}}</td>
                      <td  style="padding:0; margin:0">{{$marks->st_year}}</td>
                      <td  style="padding:0; margin:0">{{$marks->name}}</td> 
                      <form action="{{ route('singleResult', $marks->id) }}" method="get" target="_blank">
                     <td>
                         <input type="checkbox" id="add_subject" name="add_subject" value="add_subject" style="font-size:20px">
                     </td>
                  
                      <td  style="padding:0; margin:0" class="text-center hover"> 
                      
                          <button type="submit" target="_blank" class="btn btn-primary w-100 ">Veiw</a>
                            <input type="hidden" value="{{$marks->class}}" name="class">
                            <input type="hidden" value="{{$marks->st_group}}" name="group">
                            <input type="hidden" value="{{$marks->st_year}}" name="year">
                     
                      </td>
                     </form>
                  </tr>
                  @endforeach
              </tbody>
          </table> 
         
        </div>

    
    @endsection
