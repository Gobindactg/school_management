@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
@endsection
@php
$connection = mysqli_connect('localhost','root','','school_management');

if(!$connection){
die("Database Not connected". mysqli_error());
}
$sql = "SELECT MAX(bangla) AS banglas FROM student_marks";
$query_result = mysqli_query($connection, $sql);


@endphp
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
                                <td id="gpa1">
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
                                <td>
                                    @foreach ($maxMarkE as $maxmarkE)
                                    {{$maxmarkE->english}}
                                    @endforeach
                                </td>
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
                                <td id="gpa2">
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
                                <td>
                                    @foreach ($maxMarkM as $maxmarkM)
                                    {{$maxmarkM->math}}
                                    @endforeach
                                </td>
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
                                <td id="gpa3">
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
                                <td>
                                    @foreach ($maxMarkS as $maxmarkS)
                                    {{$maxmarkS->science}}
                                    @endforeach
                                </td>
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
                                <td id="gpa4">
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
                                <td>
                                    @foreach ($maxMarkB as $maxmarkB)
                                    {{$maxmarkB->bob}}
                                    @endforeach
                                </td>
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
                                <td id="gpa5">
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
                                <td>
                                    @foreach ($maxMarkR as $maxmarkR)
                                    {{$maxmarkR->religion}}
                                    @endforeach
                                </td>
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
                                <td id="gpa6">
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
                                <td id="gpa7">
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
                                <td id="gpa8">
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
                                <td id="marks">{{$marks->physical}}</td>
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
                                <td id="gpa9">
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
                            @php
                            }
                            @endphp
                            <tr class="text-center">
                                <td colspan="7"></td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="1">Obtain Mark</td>
                                <td>{{$marks->bangla + $marks->english + $marks->math + $marks->science + $marks->bob + $marks->religion + $marks->music + $marks->expressive_art + $marks->physical  }}</td>
                                <td colspan="1">Obtain GPA</td>
                                <td id="gpa">
                                </td>
                                <td colspan="1">Obtain Grade</td>
                                <td id="grade"></td>
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


    <script>
        // create gpa
        var gpa1 = Number(document.getElementById('gpa1').innerHTML);
        var gpa2 = Number(document.getElementById('gpa2').innerHTML);
        var gpa3 = Number(document.getElementById('gpa3').innerHTML);
        var gpa4 = Number(document.getElementById('gpa4').innerHTML);
        var gpa5 = Number(document.getElementById('gpa5').innerHTML);
        var gpa6 = Number(document.getElementById('gpa6').innerHTML);

        if (gpa1 <= 0) {
            var average_gpa = 0.00;
        } else if (gpa2 <= 0) {
            var average_gpa = 0.00;
        } else if (gpa3 <= 0) {
            var average_gpa = 0.00;
        } else if (gpa4 <= 0) {
            var average_gpa = 0.00;
        } else if (gpa5 <= 0) {
            var average_gpa = 0.00;
        } else if (gpa6 <= 0) {
            var average_gpa = 0.00;
        } else {
            var average_gpa = (gpa1 + gpa2 + gpa3 + gpa4 + gpa5 + gpa6) / 6;
        }

        //    var p = document.getElementById('marks1').value;


        document.getElementById('gpa').innerHTML = average_gpa.toFixed(2);

        // create grade
        if (average_gpa >= 5) {
            document.getElementById('grade').innerHTML = "A+";
        } else if (average_gpa >= 4) {
            document.getElementById('grade').innerHTML = "A";
        } else if (average_gpa >= 3.50) {
            document.getElementById('grade').innerHTML = "A-";
        } else if (average_gpa >= 3) {
            document.getElementById('grade').innerHTML = "B";
        } else if (average_gpa >= 2) {
            document.getElementById('grade').innerHTML = "C";
        } else if (average_gpa >= 1) {
            document.getElementById('grade').innerHTML = "D";
        } else {
            document.getElementById('grade').innerHTML = "F";
        }
    </script>
    @endsection