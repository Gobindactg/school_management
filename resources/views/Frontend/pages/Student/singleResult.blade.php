@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
@endsection

<style>
    .bg_image {
        background-image: url("{{ asset('ResultImage/mark4.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>
@section('content')
<div class="container my-2  ">
    <!-- <a href="#" class="btn btn-primary btn-sm">Print</a> -->
    <button onclick="window.print()">Print</button>
    <div class="container scrollbar bg_image" style="width: 27cm; height:36cm; padding-left:2.3cm; padding-right:2.2cm; padding-top:2cm; margin-bottom:9cm;">
        <div class="row">
            @foreach ($marks as $marks)
            <div class="col-md-12  py-2">
                @foreach (App\Models\Institution_info::institution() as $institution)
                <h3 class="text-center">{{ $institution->name }}</h3>
                <p class="text-center">{{ $institution->address }}</p>
                <p class="text-center"> {{ $institution->upazila->name }} ,
                    {{ $institution->district->name }} ,
                    {{ $institution->division->name }}
                </p>

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
                        <img src="{{ asset('Frontend/studentImage/' . $marks->student_info->image) }}" class="card-img-top " alt="{{ $marks->name }}" style="width:100px;">
                    </div>

                    @endforeach
                    <table class="table " style="border:2px solid black">
                        <thead style="border:2px solid black">
                            <tr class="text-center" style="border:2px solid black">
                                <th>S.L</th>
                                <th>Subject Name</th>
                                <th>Total Mark</th>
                                <th>Obtain Mark</th>
                                <th>Highest Mark</th>
                                <th>Grade</th>
                                <th> GPA</th>
                            </tr>
                        </thead>
                        <tbody style="border:2px solid black">
                            <tr class="text-center" style="border:2px solid black">
                                <td>01</td>
                                <td>Bangla</td>
                                <td>100</td>
                                <td>{{$marks->bangla}}</td>
                                <td>
                                    @foreach ($maxMark as $maxmark)
                                    {{$maxmark->bangla}}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                    if($marks->bangla >= 80){
                                    echo 'A+';
                                    $gpa1 = 5;}
                                    elseif($marks->bangla >= 70){
                                    echo 'A';
                                    $gpa1 = 4;}
                                    elseif($marks->bangla >= 60){
                                    echo 'A-';
                                    $gpa1 = 3.5;}
                                    elseif($marks->bangla >= 50){
                                    echo 'B';
                                    $gpa1 = 3;}
                                    elseif($marks->bangla >= 40){
                                    echo 'C';
                                    $gpa1 = 2;}
                                    elseif($marks->bangla >= 33){
                                    echo 'D';
                                    $gpa1 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa1 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa1">
                                    @php
                                    echo $gpa1;
                                    @endphp
                                </td>

                            </tr>
                            <tr class="text-center">
                                <td>02</td>
                                <td>English</td>
                                <td>100</td>
                                <td>{{$marks->english}}</td>
                                <td>
                                    @foreach ($maxMarkE as $maxmarkE)
                                    {{$maxmarkE->english}}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                    if($marks->english >= 80){
                                    echo 'A+';
                                    $gpa2 = 5;}
                                    elseif($marks->english >= 70){
                                    echo 'A';
                                    $gpa2 = 4;}
                                    elseif($marks->english >= 60){
                                    echo 'A-';
                                    $gpa2 = 3.5;}
                                    elseif($marks->english >= 50){
                                    echo 'B';
                                    $gpa2 = 3;}
                                    elseif($marks->english >= 40){
                                    echo 'C';
                                    $gpa2 = 2;}
                                    elseif($marks->english >= 33){
                                    echo 'D';
                                    $gpa2 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa2 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa2">
                                    @php
                                    echo $gpa2;
                                    @endphp
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>03</td>
                                <td>Math</td>
                                <td>100</td>
                                <td>{{$marks->math}}</td>
                                <td>
                                    @foreach ($maxMarkM as $maxmarkM)
                                    {{$maxmarkM->math}}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                    if($marks->math >= 80){
                                    echo 'A+';
                                    $gpa3 = 5;}
                                    elseif($marks->math >= 70){
                                    echo 'A';
                                    $gpa3 = 4;}
                                    elseif($marks->math >= 60){
                                    echo 'A-';
                                    $gpa3 = 3.5;}
                                    elseif($marks->math >= 50){
                                    echo 'B';
                                    $gpa3 = 3;}
                                    elseif($marks->math >= 40){
                                    echo 'C';
                                    $gpa3 = 2;}
                                    elseif($marks->math >= 33){
                                    echo 'D';
                                    $gpa3 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa3 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa3">
                                    @php
                                    echo $gpa3;
                                    @endphp
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>04</td>
                                <td>Science</td>
                                <td>100</td>
                                <td>{{$marks->science}}</td>
                                <td>
                                    @foreach ($maxMarkS as $maxmarkS)
                                    {{$maxmarkS->science}}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                    if($marks->science >= 80){
                                    echo 'A+';
                                    $gpa4 = 5;}
                                    elseif($marks->science >= 70){
                                    echo 'A';
                                    $gpa4 = 4;}
                                    elseif($marks->science >= 60){
                                    echo 'A-';
                                    $gpa4 = 3.5;}
                                    elseif($marks->science >= 50){
                                    echo 'B';
                                    $gpa4 = 3;}
                                    elseif($marks->science >= 40){
                                    echo 'C';
                                    $gpa4 = 2;}
                                    elseif($marks->science >= 33){
                                    echo 'D';
                                    $gpa4 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa4 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa4">
                                    @php
                                    echo $gpa4;
                                    @endphp

                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>05</td>
                                <td>Bangladesh And <br> Global Study</td>
                                <td>100</td>
                                <td>{{$marks->bob}}</td>
                                <td>
                                    @foreach ($maxMarkB as $maxmarkB)
                                    {{$maxmarkB->bob}}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                    if($marks->bob >= 80){
                                    echo 'A+';
                                    $gpa5 = 5;}
                                    elseif($marks->bob >= 70){
                                    echo 'A';
                                    $gpa5 = 4;}
                                    elseif($marks->bob >= 60){
                                    echo 'A-';
                                    $gpa5 = 3.5;}
                                    elseif($marks->bob >= 50){
                                    echo 'B';
                                    $gpa5 = 3;}
                                    elseif($marks->bob >= 40){
                                    echo 'C';
                                    $gpa5 = 2;}
                                    elseif($marks->bob >= 33){
                                    echo 'D';
                                    $gpa5 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa5 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa5">
                                    @php
                                    echo $gpa5;
                                    @endphp
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>06</td>
                                <td>Religion</td>
                                <td>100</td>
                                <td>{{$marks->religion}}</td>
                                <td>
                                    @foreach ($maxMarkR as $maxmarkR)
                                    {{$maxmarkR->religion}}
                                    @endforeach
                                </td>
                                <td>
                                    @php
                                    if($marks->religion >= 80){
                                    echo 'A+';
                                    $gpa6 = 5;}
                                    elseif($marks->religion >= 70){
                                    echo 'A';
                                    $gpa6 = 4;}
                                    elseif($marks->religion >= 60){
                                    echo 'A-';
                                    $gpa6 = 3.5;}
                                    elseif($marks->religion >= 50){
                                    echo 'B';
                                    $gpa6 = 3;}
                                    elseif($marks->religion >= 40){
                                    echo 'C';
                                    $gpa6 = 2;}
                                    elseif($marks->religion >= 33){
                                    echo 'D';
                                    $gpa6 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa6 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa6">
                                    @php
                                    echo $gpa6;
                                    @endphp
                                </td>
                            </tr>
                            @php if (isset($_GET['add_subject'])) { @endphp
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
                                    @php
                                    if($marks->music >= 80){
                                    echo 'A+';
                                    $gpa7 = 5;}
                                    elseif($marks->music >= 70){
                                    echo 'A';
                                    $gpa7 = 4;}
                                    elseif($marks->music >= 60){
                                    echo 'A-';
                                    $gpa7 = 3.5;}
                                    elseif($marks->music >= 50){
                                    echo 'B';
                                    $gpa7 = 3;}
                                    elseif($marks->music >= 40){
                                    echo 'C';
                                    $gpa7 = 2;}
                                    elseif($marks->music >= 33){
                                    echo 'D';
                                    $gpa7 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa7 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa7">
                                    @php
                                    echo $gpa7;
                                    @endphp
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>08</td>
                                <td>Expressive Art</td>
                                <td>100</td>
                                <td>{{$marks->expressive_art}}</td>
                                <td>{{$marks->expressive_art}}</td>
                                <td>
                                    @php
                                    if($marks->expressive_art >= 80){
                                    echo 'A+';
                                    $gpa8 = 5;}
                                    elseif($marks->expressive_art >= 70){
                                    echo 'A';
                                    $gpa8 = 4;}
                                    elseif($marks->expressive_art >= 60){
                                    echo 'A-';
                                    $gpa8 = 3.5;}
                                    elseif($marks->expressive_art >= 50){
                                    echo 'B';
                                    $gpa8 = 3;}
                                    elseif($marks->expressive_art >= 40){
                                    echo 'C';
                                    $gpa8 = 2;}
                                    elseif($marks->expressive_art >= 33){
                                    echo 'D';
                                    $gpa8 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa8 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa8">
                                    @php
                                    echo $gpa8;
                                    @endphp
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>09</td>
                                <td>Physical</td>
                                <td>100</td>
                                <td id="marks">{{$marks->physical}}</td>
                                <td>{{$marks->physical}}</td>
                                <td>
                                    @php
                                    if($marks->physical >= 80){
                                    echo 'A+';
                                    $gpa9 = 5;}
                                    elseif($marks->physical >= 70){
                                    echo 'A';
                                    $gpa9 = 4;}
                                    elseif($marks->physical >= 60){
                                    echo 'A-';
                                    $gpa9 = 3.5;}
                                    elseif($marks->physical >= 50){
                                    echo 'B';
                                    $gpa9 = 3;}
                                    elseif($marks->physical >= 40){
                                    echo 'C';
                                    $gpa9 = 2;}
                                    elseif($marks->physical >= 33){
                                    echo 'D';
                                    $gpa9 = 1;}
                                    else{
                                    echo 'F';
                                    $gpa9 = 0;};
                                    @endphp
                                </td>
                                <td id="gpa9">
                                    @php
                                    echo $gpa9;
                                    @endphp
                                </td>
                            </tr>
                            @php
                            }
                            @endphp
                            <tr class="text-center">
                                <td colspan="7"></td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="1">Obtain Mark</td>
                                <td>
                                    @php if (isset($_GET['add_subject']))
                                    $total = $marks->bangla + $marks->english + $marks->math + $marks->science + $marks->bob + $marks->religion + $marks->music + $marks->expressive_art + $marks->physical ;
                                    else
                                    $total = $marks->bangla + $marks->english + $marks->math + $marks->science + $marks->bob + $marks->religion;
                                    echo $total;
                                    @endphp
                                </td>
                                <td colspan="1">Obtain GPA</td>
                                <td id="gpa">

                                    @php if (isset($_GET['add_subject'])){
                                    $total_gpa = $gpa1 + $gpa2 +$gpa3 + $gpa4 + $gpa5 + $gpa6 + $gpa7 + $gpa8 + $gpa9;
                                    $average_gpa = $total_gpa/9;
                                    echo round($average_gpa, 2);}
                                    else{
                                    $total_gpa = $gpa1 + $gpa2 +$gpa3 + $gpa4 + $gpa5 + $gpa6;
                                    $average_gpa = $total_gpa/6;
                                    echo round($average_gpa,2);}
                                    @endphp
                                </td>
                                <td colspan="1">Obtain Grade</td>
                                <td id="grade">
                                    @php
                                    if($average_gpa >= 5){
                                    echo 'A+';
                                    }
                                    elseif($average_gpa >= 4){
                                    echo 'A';
                                    }
                                    elseif($average_gpa >= 3.5){
                                    echo 'A-';
                                    }
                                    elseif($average_gpa >= 3){
                                    echo 'B';
                                    }
                                    elseif($average_gpa >= 2){
                                    echo 'C';
                                    }
                                    elseif($average_gpa >= 1){
                                    echo 'D';
                                    }
                                    else{
                                    echo 'F';
                                    };
                                    @endphp
                                </td>
                                <td><strong>Merit : 2nd</strong></td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="row " style="padding-top:15%;">
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