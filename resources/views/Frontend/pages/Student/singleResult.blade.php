@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
         <div class="container my-2">
                <div class="row">
                    
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <select class="form-select " id="exampleFormControlSelect1" name="group">
                             <option value="">-- Select Student Group --</option>
                            @foreach (App\Models\StudentGroup::class_group() as $group)   
                            <option value="{{$group->name}}"> {{$group->name}} </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select " id="exampleFormControlSelect1" name="year">
                                <option selected value="">Select Year</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                           <input type="submit" value="Search" class="btn btn-info w-100">
                           </form>
                        </div>
                    
                </div>
            </div>
  
        <div class="container scrollbar-thin scrollbar-x">
            <div class="row">
                 @foreach ($marks as $marks)
                <div class="col-md-12 card card-body py-2">
                    @foreach (App\Models\Institution_info::institution() as $institution)
                        <h3 class="text-center">{{ $institution->name }}</h3>
                        <p class="text-center">{{ $institution->address }}</p>
                        <p class="text-center"> {{ $institution->upazila->name }} ,
                            {{ $institution->district->name }} ,
                            {{ $institution->division->name }}</p>
                           
                        <h3 class="text-center">First Terminal Examination</h3>
                        <div class="row py-3">
                           
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
                             
                            @endforeach
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
                                        <td>
                                            @if($marks->bangla >= 80)
                                                A+
                                            @elseif($marks->bangla >= 70)
                                                A
                                            @elseif($marks->bangla >= 60)
                                                A-
                                            @elseif($marks->bangla >= 50)
                                                B
                                            @elseif($marks->bangla >= 40)
                                                C
                                            @elseif($marks->bangla >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->bangla >= 80)
                                                5.00
                                            @elseif($marks->bangla >= 70)
                                                4.00
                                            @elseif($marks->bangla >= 60)
                                                3.50
                                            @elseif($marks->bangla >= 50)
                                                3.00
                                            @elseif($marks->bangla >= 40)
                                                2.00
                                            @elseif($marks->bangla >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                       
                                    </tr>
                                    <tr class="text-center">
                                        <td>02</td>
                                        <td>English</td>
                                        <td>100</td>
                                        <td>{{$marks->english}}</td>
                                        <td>{{$marks->english}}</td>
                                        <td>
                                               @if($marks->english >= 80)
                                                A+
                                            @elseif($marks->english >= 70)
                                                A
                                            @elseif($marks->english >= 60)
                                                A-
                                            @elseif($marks->english >= 50)
                                                B
                                            @elseif($marks->english >= 40)
                                                C
                                            @elseif($marks->english >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->english >= 80)
                                                5.00
                                            @elseif($marks->english >= 70)
                                                4.00
                                            @elseif($marks->english >= 60)
                                                3.50
                                            @elseif($marks->english >= 50)
                                                3.00
                                            @elseif($marks->english >= 40)
                                                2.00
                                            @elseif($marks->english >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>03</td>
                                        <td>Math</td>
                                        <td>100</td>
                                        <td>{{$marks->math}}</td>
                                        <td>{{$marks->math}}</td>
                                        <td>
                                               @if($marks->math >= 80)
                                                A+
                                            @elseif($marks->math >= 70)
                                                A
                                            @elseif($marks->math >= 60)
                                                A-
                                            @elseif($marks->math >= 50)
                                                B
                                            @elseif($marks->math >= 40)
                                                C
                                            @elseif($marks->math >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->math >= 80)
                                                5.00
                                            @elseif($marks->math >= 70)
                                                4.00
                                            @elseif($marks->math >= 60)
                                                3.50
                                            @elseif($marks->math >= 50)
                                                3.00
                                            @elseif($marks->math >= 40)
                                                2.00
                                            @elseif($marks->math >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>04</td>
                                        <td>Science</td>
                                        <td>100</td>
                                        <td>{{$marks->science}}</td>
                                        <td>{{$marks->science}}</td>
                                        <td>
                                               @if($marks->science >= 80)
                                                A+
                                            @elseif($marks->science >= 70)
                                                A
                                            @elseif($marks->science >= 60)
                                                A-
                                            @elseif($marks->science >= 50)
                                                B
                                            @elseif($marks->science >= 40)
                                                C
                                            @elseif($marks->science >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->science >= 80)
                                                5.00
                                            @elseif($marks->science >= 70)
                                                4.00
                                            @elseif($marks->science >= 60)
                                                3.50
                                            @elseif($marks->science >= 50)
                                                3.00
                                            @elseif($marks->science >= 40)
                                                2.00
                                            @elseif($marks->science >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>05</td>
                                        <td>Bangladesh And <br> Global Study</td>
                                        <td>100</td>
                                        <td>{{$marks->bob}}</td>
                                        <td>{{$marks->bob}}</td>
                                        <td>
                                               @if($marks->bob >= 80)
                                                A+
                                            @elseif($marks->bob >= 70)
                                                A
                                            @elseif($marks->bob >= 60)
                                                A-
                                            @elseif($marks->bob >= 50)
                                                B
                                            @elseif($marks->bob >= 40)
                                                C
                                            @elseif($marks->bob >= 33)
                                                D
                                            @else
                                                F
                                            @endif    
                                        </td>
                                        <td>
                                            @if($marks->bob >= 80)
                                                5.00
                                            @elseif($marks->bob >= 70)
                                                4.00
                                            @elseif($marks->bob >= 60)
                                                3.50
                                            @elseif($marks->bob >= 50)
                                                3.00
                                            @elseif($marks->bob >= 40)
                                                2.00
                                            @elseif($marks->bob >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>06</td>
                                        <td>Religion</td>
                                        <td>100</td>
                                        <td>{{$marks->religion}}</td>
                                        <td>{{$marks->religion}}</td>
                                        <td>
                                            @if($marks->religion >= 80)
                                                A+
                                            @elseif($marks->religion >= 70)
                                                A
                                            @elseif($marks->religion >= 60)
                                                A-
                                            @elseif($marks->religion >= 50)
                                                B
                                            @elseif($marks->religion >= 40)
                                                C
                                            @elseif($marks->religion >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->religion >= 80)
                                                5.00
                                            @elseif($marks->religion >= 70)
                                                4.00
                                            @elseif($marks->religion >= 60)
                                                3.50
                                            @elseif($marks->religion >= 50)
                                                3.00
                                            @elseif($marks->religion >= 40)
                                                2.00
                                            @elseif($marks->religion >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
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
                                        <td>
                                            @if($marks->music >= 80)
                                                A+
                                            @elseif($marks->music >= 70)
                                                A
                                            @elseif($marks->music >= 60)
                                                A-
                                            @elseif($marks->music >= 50)
                                                B
                                            @elseif($marks->music >= 40)
                                                C
                                            @elseif($marks->music >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->music >= 80)
                                                5.00
                                            @elseif($marks->music >= 70)
                                                4.00
                                            @elseif($marks->music >= 60)
                                                3.50
                                            @elseif($marks->music >= 50)
                                                3.00
                                            @elseif($marks->music >= 40)
                                                2.00
                                            @elseif($marks->music >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>08</td>
                                        <td>Expressive Art</td>
                                        <td>100</td>
                                        <td>{{$marks->expressive_art}}</td>
                                        <td>{{$marks->expressive_art}}</td>
                                        <td>
                                               @if($marks->expressive_art >= 80)
                                                A+
                                            @elseif($marks->expressive_art >= 70)
                                                A
                                            @elseif($marks->expressive_art >= 60)
                                                A-
                                            @elseif($marks->expressive_art >= 50)
                                                B
                                            @elseif($marks->expressive_art >= 40)
                                                C
                                            @elseif($marks->expressive_art >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->expressive_art >= 80)
                                                5.00
                                            @elseif($marks->expressive_art >= 70)
                                                4.00
                                            @elseif($marks->expressive_art >= 60)
                                                3.50
                                            @elseif($marks->expressive_art >= 50)
                                                3.00
                                            @elseif($marks->expressive_art >= 40)
                                                2.00
                                            @elseif($marks->expressive_art >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>09</td>
                                        <td>Physical</td>
                                        <td>100</td>
                                        <td>{{$marks->physical}}</td>
                                        <td>{{$marks->physical}}</td>
                                        <td>
                                               @if($marks->physical >= 80)
                                                A+
                                            @elseif($marks->physical >= 70)
                                                A
                                            @elseif($marks->physical >= 60)
                                                A-
                                            @elseif($marks->physical >= 50)
                                                B
                                            @elseif($marks->physical >= 40)
                                                C
                                            @elseif($marks->physical >= 33)
                                                D
                                            @else
                                                F
                                            @endif
                                        </td>
                                        <td>
                                            @if($marks->physical >= 80)
                                                5.00
                                            @elseif($marks->physical >= 70)
                                                4.00
                                            @elseif($marks->physical >= 60)
                                                3.50
                                            @elseif($marks->physical >= 50)
                                                3.00
                                            @elseif($marks->physical >= 40)
                                                2.00
                                            @elseif($marks->physical >= 33)
                                                1.00
                                            @else
                                                0.00
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="7"></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td colspan="1">Obtain Mark</td>
                                        <td>{{$marks->bangla + $marks->english + $marks->math + $marks->science + $marks->bob + $marks->religion + $marks->music + $marks->expressive_art + $marks->physical  }}</td>
                                        <td colspan="1">Obtain GPA</td>
                                        <td>3.58</td>
                                        <td colspan="1">Obtain Grade</td>
                                        <td>A-</td>
                                        <td><strong>Merit : 2nd</strong></td>
                                    </tr>
                                  
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
