@extends('Frontend.layouts.master')
@section('title', 'Admit')
@section('content')
      <div class="container card card-body pt-3 scrollbar scrollbar-x">
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Routine Entry</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body card card-body " >
                <form action="{{route('routine_store')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Class</label>
                    <select name="class" id="" class="form-control">
                            <option value="">-- Select Student Class --</option>
                            <option value="pre_primary"> Class Pre Primary </option>
                            <option value="1">Class One</option>
                            <option value="2">Class Two</option>
                            <option value="3">Class Three</option>
                            <option value="4">Class Four</option>
                            <option value="5">Class Five</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Group</label>
                        <select name="group" id="" class="form-control">
                            <option value="">-- Select Student Group --</option>
                            @foreach (App\Models\StudentGroup::class_group() as $group)   
                            <option value="{{$group->name}}"> {{$group->name}} </option>
                            @endforeach
                        </select>
                  </div>

                
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Year</label>
                      <select name="year" id="" class="form-control">
                            <option value="">-- Select Year --</option>
                            <option value="2022"> 2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Exam Name</label>
                      <select name="exam_title" id="" class="form-control">
                            <option value="">-- Select Exam Name --</option>
                            <option value="first_terminal"> First Terminal Exam</option>
                            <option value="second_terminal">Second Terminal Exam</option>
                            <option value="annual_exam">Annual Eam</option>
                        </select>
                  </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Subject</label>
                      <select name="subject" id="" class="form-control">
                            <option value="">-- Subject--</option>
                            <option value="bangla"> Bangla </option>
                            <option value="englsih">English</option>
                            <option value="math">Math</option>
                            <option value="science">Science</option>
                            <option value="bob">Banglaseh and Global Study</option>
                            <option value="religion">Religion</option>
                            <option value="musice">Music</option>
                            <option value="expressive">expressive</option>
                            <option value="physical">Physical Excerices</option>
                        </select>
                  </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Date</label>
                    <input type="date" class="form-control" name="date">
                  </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Day</label>
                     <select name="day" id="" class="form-control">
                            <option value="">-- Exam Day--</option>
                            <option value="saturday"> Saturday </option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                        </select>
                  </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Time</label>
                    <input type="text" class="form-control" name="time">
                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>

        <h3>Manage Rotine </h3><hr>
        @include('Frontend.partial.message')
         <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1"  style="width:170px;">Add New Routine</button>
      
      <table class="table table-bordered my-2  ">
        <thead>
          <tr class="bg-info text-center">
            <th>S.L</th>
            <th>Class</th>
            <th>Group</th>
            <th>Year</th>
            <th>Day</th>
            <th>Exam Name</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach($routine as $routine)
          <tr>
            <td>{{+$loop->index+1}}</td>
            <td>{{$routine->class}}</td>
            <td>{{$routine->st_group}}</td>
            <td>{{$routine->st_year}}</td>
            <td>{{$routine->exam_day}}</td>
            <td>{{$routine->exam_title}}</td>
            <td>{{$routine->subject}}</td>
            <td>{{$routine->exam_date}}</td>
            <td>{{$routine->exam_time}}</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm">Edit</a>
              <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
@endsection