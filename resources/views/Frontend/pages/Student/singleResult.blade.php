@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

  
        <div class="container scrollbar-thin scrollbar-x">
            <div class="row">
                <div class="col-md-12 card card-body py-2">
                    @foreach ($institution as $institution)
                        <h3 class="text-center">{{ $institution->name }}</h3>
                        <p class="text-center">{{ $institution->address }}</p>
                        <p class="text-center"> {{ $institution->upazila->name }} ,
                            {{ $institution->district->name }} ,
                            {{ $institution->division->name }}</p>
                           
                        <h3 class="text-center">First Terminal Examination</h3>
                        <div class="row py-3">
                            @foreach ($marks as $marks)
                            <div class="col-md-5">
                                <p> <strong>Student Name : </strong> {{ $marks->name }} </p>
                                <p> <strong>Father's Name : </strong> {{ $marks->student_info->father_name }} </p>
                                <p> <strong>Mother's Name : </strong> {{ $marks->student_info->mother_name }} </p>
                                
                            </div>
                            <div class="col-md-4">
                                <p> <strong>Class : </strong> {{ $marks->class }} </p>
                                <p> <strong>Roll : </strong> {{ $marks->st_roll }} </p>
                                <p> <strong>Date Of Birth : </strong> {{ $marks->student_info->date_of_birth }} </p>
                            </div>
                            <div class="col-md-3 text-center py-2">
                                <img src="{{ asset('Frontend/studentImage/' . $marks->student_info->image) }}" class="card-img-top "
                        alt="{{ $marks->name }}" style="width:100px;">
                            </div>
                                {{-- <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Student Name : {{ $marks->name }}</th>
                                            <th> Student Class : {{ $marks->class }}</th>
                                            <th>Student Roll : {{ $marks->student_info->name }}</th>
                                        </tr>
                                    </thead>
                                </table> --}}
                          
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>S.L</th>
                                        <th>Subject Name</th>
                                        <th>Total Mark</th>
                                        <th>Obtain Mark</th>
                                        <th>Highest Mark</th>
                                        <th>Grade</th>
                                        <th> GPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>01</td>
                                        <td>Bangla</td>
                                        <td>100</td>
                                        <td>{{$marks->bangla}}</td>
                                        <td>{{$marks->bangla}}</td>
                                        <td>{{$marks->bangla}}</td>
                                        <td>{{$marks->bangla}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>02</td>
                                        <td>English</td>
                                        <td>100</td>
                                        <td>{{$marks->english}}</td>
                                        <td>{{$marks->english}}</td>
                                        <td>{{$marks->english}}</td>
                                        <td>{{$marks->english}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>03</td>
                                        <td>Math</td>
                                        <td>100</td>
                                        <td>{{$marks->math}}</td>
                                        <td>{{$marks->math}}</td>
                                        <td>{{$marks->math}}</td>
                                        <td>{{$marks->math}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>04</td>
                                        <td>Science</td>
                                        <td>100</td>
                                        <td>{{$marks->science}}</td>
                                        <td>{{$marks->science}}</td>
                                        <td>{{$marks->science}}</td>
                                        <td>{{$marks->science}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>05</td>
                                        <td>Bangladesh And <br> Global Study</td>
                                        <td>100</td>
                                        <td>{{$marks->bob}}</td>
                                        <td>{{$marks->bob}}</td>
                                        <td>{{$marks->bob}}</td>
                                        <td>{{$marks->bob}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>06</td>
                                        <td>Religion</td>
                                        <td>100</td>
                                        <td>{{$marks->religion}}</td>
                                        <td>{{$marks->religion}}</td>
                                        <td>{{$marks->religion}}</td>
                                        <td>{{$marks->religion}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><strong>Additional Subject</strong> </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>07</td>
                                        <td>Music</td>
                                        <td>100</td>
                                        <td>{{$marks->music}}</td>
                                        <td>{{$marks->music}}</td>
                                        <td>{{$marks->music}}</td>
                                        <td>{{$marks->music}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>08</td>
                                        <td>Expressive Art</td>
                                        <td>100</td>
                                        <td>{{$marks->expressive_art}}</td>
                                        <td>{{$marks->expressive_art}}</td>
                                        <td>{{$marks->expressive_art}}</td>
                                        <td>{{$marks->expressive_art}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>09</td>
                                        <td>Physical</td>
                                        <td>100</td>
                                        <td>{{$marks->physical}}</td>
                                        <td>{{$marks->physical}}</td>
                                        <td>{{$marks->physical}}</td>
                                        <td>{{$marks->physical}}</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="7"></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="1">Obtain Mark</td>
                                        <td>550</td>
                                        <td colspan="1">Obtain GPA</td>
                                        <td>3.58</td>
                                        <td colspan="1">Obtain Grade</td>
                                        <td>A-</td>
                                        <td><strong>Merit : 2nd</strong></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row " style="padding-top:30px">
                                <div class="col-md-6 text-center">
                                    <br>
                                    Signature Class Teacher
                                </div>
                                <div class="col-md-6 text-center">
                                    <br>
                                    Signature Head Teacher
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

         
        </div>


    @endsection
