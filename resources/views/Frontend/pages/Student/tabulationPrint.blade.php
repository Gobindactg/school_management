@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
@endsection
<style>
    .t_border,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .shortResult {
        width: 100%;
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .shortResult th {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .shortResult td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
@section('content')
<div class="row " style="background-color:white;margin-bottom:10px">
    <div class="col-md-2" style="padding-top:14px">
        <form action="{{route('tabulationPDF2')}}" method="get" target="_blank">

            <select class="form-select " name="class" id="class_admit">
                <option value="">--Select Class--</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
    </div>
    <div class="col-md-2" style="padding-top:14px">
        <select class="form-select " id="exampleFormControlSelect1" name="group">
            <option value="">-- Select Student Group --</option>
            @foreach (App\Models\StudentGroup::class_group() as $group)
            <option value="{{$group->name}}"> {{$group->name}} </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2" style="padding-top:14px">
        <select class="form-select " id="exampleFormControlSelect1" name="year">
            <option selected value="">Select Year</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
        </select>
    </div>
    <div class="col-md-3" style="padding-top:14px">
        <select name="examName" id="" class="form-control">
            <option value="">-- Select Exam Name --</option>
            <option value="First Terminal Exam"> First Terminal Exam</option>
            <option value="Second Terminal Exam">Second Terminal Exam</option>
            <option value="annual examination">Annual Exam</option>
        </select>
    </div>
    <div class="col-md-2 text-center form-check" style="padding-top: 23px; margin:0;">
        <input type="checkbox" id="add_routine" name="add" value="add" class="form-check-input">
        <label class="form-check-label " style="font-weight: 900;" for="flexCheckDefault">
            Add 4th Sub
        </label>
    </div>

    <div class="col-md-1 w-100" style="padding-top:14px">
        <input type="hidden" value="" id="total_Student" name="Tstudent">
        <input type="hidden" value="" id="tPass" name="tPass">
        <input type="hidden" value="" id="tFail" name="tFail">
        <input type="submit" value="Print" class="btn btn-info ">
        </form>
    </div>

</div>
@foreach (App\Models\Institution_info::institution() as $institution)
<div class="card card-body">
    <div class="row ">
        <table style="width: 100%; text-align:center; margin:0; padding:0;">
            <thead>
                <tr>
                    <th style="width: 25%;">
                        <div class="col-md-3 text-center" style="padding-top:24px">
                            @if($institution->image == NULL)
                            <div class="col-md-3 text-center" style="padding-top:24px"></div>
                            @else
                            <div class="col-md-3 text-center" style="padding-top:24px">
                                <img src="{{ asset('institutionImage/' . $institution->image) }}" alt="" style="width: 100px;height:100px; border-radius:50%">
                            </div>
                            @endif
                        </div>
                    </th>
                    <th style="width: 50%;">
                        @foreach(App\Models\student_mark::institution() as $institution)
                        <h2 style="text-align:center; padding:0; margin:0; color:teal; text-transform:uppercase"><strong>{{$institution->name}}</strong></h2>
                        <h4 style="text-align:center; padding:0; margin:0"><strong> {{$institution->address}}, {{$institution->upazila->name}},{{$institution->district->name}}, {{$institution->division->name}} </strong></h4>
                        <h2 style="font-family: tahoma; font-style:italic; text-align:center; padding:0; padding-top:5px; padding-bottom:5px; margin:0;color:teal "><strong><u>TABULATION SHEET</u> </strong></h2>
                        <h2 class="text-primary text-center border text-uppercase" style="padding:0; margin:0; text-align:center; font-family:tohoma; font-style:italic"><strong>
                                @php if(isset($_GET['examName']))
                                echo $_GET['examName'];
                                @endphp
                            </strong></h2>
                        @endforeach
                    </th>
                    <th style="width: 25%;">
                        <table class="shortResult">
                            <thead>
                                <tr>
                                    <th colspan="2" style="background-color:#D6EAF8">Result Summary</th>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">Total Student</th>
                                    <th id="totalStudent" style="width: 20%;"></th>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">Promoted Student</th>
                                    <th id="promoted"> </th>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">Fail Student</th>
                                    <th id="fail"></th>
                                </tr>
                            </thead>

                        </table>

                    </th>
                </tr>
            </thead>
        </table>


        @if($add)
        <div class="scrollbar scrollbar-x ">
            <table class="table text-center " id="resultBody">
                <thead>
                    <tr class="bg-dark t_border">
                        <th>S.L</th>
                        <th>S.Name</th>
                        <th>Roll</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>BOB</th>
                        <th>Religion</th>
                        <th>Music</th>
                        <th>Expressive</th>
                        <th>Physical</th>
                        <th>T.Mark</th>
                        <th>GPA</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $results)
                    <tr>
                        <td>{{+$loop->index+1}}</td>
                        <td>{{$results->name}}</td>
                        <td>{{$results->st_roll}}</td>
                        <td>{{$results->bangla}}</td>
                        <td>{{$results->english}}</td>
                        <td>{{$results->math}}</td>
                        <td>{{$results->science}}</td>
                        <td>{{$results->bob}}</td>
                        <td>{{$results->religion}}</td>
                        <td>{{$results->music}}</td>
                        <td>{{$results->expressive_art}}</td>
                        <td>{{$results->physical}}</td>
                        <td>
                            @php
                            $total = $results->bangla + $results->english + $results->math + $results->science + $results->bob + $results->religion + $results->music + $results->expressive_art + $results->physical ;
                            echo $total;
                            @endphp
                        </td>
                        <td>
                            @php
                            $bangla = $results->bangla;
                            $english = $results->english;
                            $math = $results->math;
                            $science = $results->science;
                            $bob = $results->bob;
                            $religion = $results->religion;
                            $music = $results->music;
                            $expressive= $results->expressive_art;
                            $physical = $results->physical;

                            if($results->bangla >= 80)
                            $gpaB = 5;
                            elseif($results->bangla >= 70)
                            $gpaB = 4;
                            elseif($results->bangla >= 60)
                            $gpaB = 3.5;
                            elseif($results->bangla >= 50)
                            $gpaB = 3;
                            elseif($results->bangla >= 40)
                            $gpaB = 2;
                            elseif($results->bangla >= 33)
                            $gpaB = 1;
                            else
                            $gpaB = 0;

                            if($results->english >= 80)
                            $gpaE = 5;
                            elseif($results->english >= 70)
                            $gpaE = 4;
                            elseif($results->english >= 60)
                            $gpaE = 3.5;
                            elseif($results->english >= 50)
                            $gpaE = 3;
                            elseif($results->english >= 40)
                            $gpaE = 2;
                            elseif($results->english >= 33)
                            $gpaE = 1;
                            else
                            $gpaE = 0;


                            if($results->math >= 80)
                            $gpaM = 5;
                            elseif($results->math >= 70)
                            $gpaM = 4;
                            elseif($results->math >= 60)
                            $gpaM = 3.5;
                            elseif($results->math >= 50)
                            $gpaM = 3;
                            elseif($results->math >= 40)
                            $gpaM = 2;
                            elseif($results->math >= 33)
                            $gpaM = 1;
                            else
                            $gpaM = 0;

                            if($results->science >= 80)
                            $gpaS = 5;
                            elseif($results->science >= 70)
                            $gpaS = 4;
                            elseif($results->science >= 60)
                            $gpaS = 3.5;
                            elseif($results->science >= 50)
                            $gpaS = 3;
                            elseif($results->science >= 40)
                            $gpaS = 2;
                            elseif($results->science >= 33)
                            $gpaS = 1;
                            else
                            $gpaS = 0;

                            if($results->bob >= 80)
                            $gpaBo = 5;
                            elseif($results->bob >= 70)
                            $gpaBo = 4;
                            elseif($results->bob >= 60)
                            $gpaBo = 3.5;
                            elseif($results->bob >= 50)
                            $gpaBo = 3;
                            elseif($results->bob >= 40)
                            $gpaBo = 2;
                            elseif($results->bob >= 33)
                            $gpaBo = 1;
                            else
                            $gpaBo = 0;

                            if($results->religion >= 80)
                            $gpaR = 5;
                            elseif($results->religion >= 70)
                            $gpaR = 4;
                            elseif($results->religion >= 60)
                            $gpaR = 3.5;
                            elseif($results->religion >= 50)
                            $gpaR = 3;
                            elseif($results->religion >= 40)
                            $gpaR = 2;
                            elseif($results->religion >= 33)
                            $gpaR = 1;
                            else
                            $gpaR = 0;


                            if($results->music >= 80)
                            $gpaMu = 5;
                            elseif($results->music >= 70)
                            $gpaMu = 4;
                            elseif($results->music >= 60)
                            $gpaMu = 3.5;
                            elseif($results->music >= 50)
                            $gpaMu = 3;
                            elseif($results->music >= 40)
                            $gpaMu = 2;
                            elseif($results->music >= 33)
                            $gpaMu = 1;
                            else
                            $gpaMu = 0;


                            if($results->expressive_art >= 80)
                            $gpaEx = 5;
                            elseif($results->expressive_art >= 70)
                            $gpaEx = 4;
                            elseif($results->expressive_art >= 60)
                            $gpaEx = 3.5;
                            elseif($results->expressive_art >= 50)
                            $gpaEx = 3;
                            elseif($results->expressive_art >= 40)
                            $gpaEx = 2;
                            elseif($results->expressive_art >= 33)
                            $gpaEx = 1;
                            else
                            $gpaEx = 0;


                            if($results->physical >= 80)
                            $gpaPh = 5;
                            elseif($results->physical >= 70)
                            $gpaPh = 4;
                            elseif($results->physical >= 60)
                            $gpaPh = 3.5;
                            elseif($results->physical >= 50)
                            $gpaPh = 3;
                            elseif($results->physical >= 40)
                            $gpaPh = 2;
                            elseif($results->physical >= 33)
                            $gpaPh = 1;
                            else
                            $gpaPh = 0;

                            if(isset($_GET['add'])){
                            if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33 or $music < 33 or $expressive < 33 or $physical < 33){ $averageGpa=0; } else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR + $gpaMu + $gpaEx + $gpaPh; $averageGpa=$totalGpa / 9; } } else{if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33){ $averageGpa=0; }else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR ; $averageGpa=$totalGpa / 6; } } echo round($averageGpa, 2); @endphp </td>
                        <td>@php
                            if($averageGpa <= 0) echo '<span style="color:red;">Fail</span>' ; else echo '<span style="color:green; font-size:18px">Promoted</span>' ; @endphp <span class="status2 invisible">@php if($averageGpa <= 0) echo 'Fail' ; else echo 'Promoted' ; @endphp</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="scrollbar scrollbar-x container">
            <table class="table text-center " id="resultBody">
                <thead>
                    <tr class="bg-dark t_border">
                        <th>S.L</th>
                        <th>S.Name</th>
                        <th>Roll</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>BOB</th>
                        <th>Religion</th>
                        <th>T.Mark</th>
                        <th>GPA</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $results)
                    <tr>
                        <td>{{+$loop->index+1}}</td>
                        <td>{{$results->name}}</td>
                        <td>{{$results->st_roll}}</td>
                        <td>{{$results->bangla}}</td>
                        <td>{{$results->english}}</td>
                        <td>{{$results->math}}</td>
                        <td>{{$results->science}}</td>
                        <td>{{$results->bob}}</td>
                        <td>{{$results->religion}}</td>
                        <td>
                            @php
                            $total = $results->bangla + $results->english + $results->math + $results->science + $results->bob + $results->religion;
                            echo $total;
                            @endphp
                        </td>
                        <td>
                            @php
                            $bangla = $results->bangla;
                            $english = $results->english;
                            $math = $results->math;
                            $science = $results->science;
                            $bob = $results->bob;
                            $religion = $results->religion;
                            $music = $results->music;
                            $expressive= $results->expressive_art;
                            $physical = $results->physical;

                            if($results->bangla >= 80)
                            $gpaB = 5;
                            elseif($results->bangla >= 70)
                            $gpaB = 4;
                            elseif($results->bangla >= 60)
                            $gpaB = 3.5;
                            elseif($results->bangla >= 50)
                            $gpaB = 3;
                            elseif($results->bangla >= 40)
                            $gpaB = 2;
                            elseif($results->bangla >= 33)
                            $gpaB = 1;
                            else
                            $gpaB = 0;

                            if($results->english >= 80)
                            $gpaE = 5;
                            elseif($results->english >= 70)
                            $gpaE = 4;
                            elseif($results->english >= 60)
                            $gpaE = 3.5;
                            elseif($results->english >= 50)
                            $gpaE = 3;
                            elseif($results->english >= 40)
                            $gpaE = 2;
                            elseif($results->english >= 33)
                            $gpaE = 1;
                            else
                            $gpaE = 0;


                            if($results->math >= 80)
                            $gpaM = 5;
                            elseif($results->math >= 70)
                            $gpaM = 4;
                            elseif($results->math >= 60)
                            $gpaM = 3.5;
                            elseif($results->math >= 50)
                            $gpaM = 3;
                            elseif($results->math >= 40)
                            $gpaM = 2;
                            elseif($results->math >= 33)
                            $gpaM = 1;
                            else
                            $gpaM = 0;

                            if($results->science >= 80)
                            $gpaS = 5;
                            elseif($results->science >= 70)
                            $gpaS = 4;
                            elseif($results->science >= 60)
                            $gpaS = 3.5;
                            elseif($results->science >= 50)
                            $gpaS = 3;
                            elseif($results->science >= 40)
                            $gpaS = 2;
                            elseif($results->science >= 33)
                            $gpaS = 1;
                            else
                            $gpaS = 0;

                            if($results->bob >= 80)
                            $gpaBo = 5;
                            elseif($results->bob >= 70)
                            $gpaBo = 4;
                            elseif($results->bob >= 60)
                            $gpaBo = 3.5;
                            elseif($results->bob >= 50)
                            $gpaBo = 3;
                            elseif($results->bob >= 40)
                            $gpaBo = 2;
                            elseif($results->bob >= 33)
                            $gpaBo = 1;
                            else
                            $gpaBo = 0;

                            if($results->religion >= 80)
                            $gpaR = 5;
                            elseif($results->religion >= 70)
                            $gpaR = 4;
                            elseif($results->religion >= 60)
                            $gpaR = 3.5;
                            elseif($results->religion >= 50)
                            $gpaR = 3;
                            elseif($results->religion >= 40)
                            $gpaR = 2;
                            elseif($results->religion >= 33)
                            $gpaR = 1;
                            else
                            $gpaR = 0;


                            if($results->music >= 80)
                            $gpaMu = 5;
                            elseif($results->music >= 70)
                            $gpaMu = 4;
                            elseif($results->music >= 60)
                            $gpaMu = 3.5;
                            elseif($results->music >= 50)
                            $gpaMu = 3;
                            elseif($results->music >= 40)
                            $gpaMu = 2;
                            elseif($results->music >= 33)
                            $gpaMu = 1;
                            else
                            $gpaMu = 0;


                            if($results->expressive_art >= 80)
                            $gpaEx = 5;
                            elseif($results->expressive_art >= 70)
                            $gpaEx = 4;
                            elseif($results->expressive_art >= 60)
                            $gpaEx = 3.5;
                            elseif($results->expressive_art >= 50)
                            $gpaEx = 3;
                            elseif($results->expressive_art >= 40)
                            $gpaEx = 2;
                            elseif($results->expressive_art >= 33)
                            $gpaEx = 1;
                            else
                            $gpaEx = 0;


                            if($results->physical >= 80)
                            $gpaPh = 5;
                            elseif($results->physical >= 70)
                            $gpaPh = 4;
                            elseif($results->physical >= 60)
                            $gpaPh = 3.5;
                            elseif($results->physical >= 50)
                            $gpaPh = 3;
                            elseif($results->physical >= 40)
                            $gpaPh = 2;
                            elseif($results->physical >= 33)
                            $gpaPh = 1;
                            else
                            $gpaPh = 0;

                            if(isset($_GET['add'])){
                            if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33 or $music < 33 or $expressive < 33 or $physical < 33){ $averageGpa=0; } else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR + $gpaMu + $gpaEx + $gpaPh; $averageGpa=$totalGpa / 9; } } else{if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33){ $averageGpa=0; }else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR ; $averageGpa=$totalGpa / 6; } } echo round($averageGpa, 2); @endphp </td>
                        <td>
                            @php
                            if($averageGpa <= 0) echo '<span style="color:red;">Fail</span>' ; else echo '<span style="color:green; font-size:18px">Promoted</span>' ; @endphp <span class="status2 invisible">@php if($averageGpa <= 0) echo 'Fail' ; else echo 'Promoted' ; @endphp</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
    @endforeach

    <script type="text/javascript">
        window.onload = function() {
            var table = document.getElementById("resultBody");
            var totalStudents = table.querySelectorAll("tbody tr").length;
            document.getElementById('total_Student').value = totalStudents;
            document.getElementById('totalStudent').innerHTML = totalStudents;
        }

        let items = [],
            itemsFromTable = Array.from(document.querySelectorAll('.status2')).forEach((item, index) => {
                items[index] = item.innerHTML;
            });

        function getOccurrence(array, value) {
            let count = 0;
            array.forEach((v) => (v === value && count++));
            return count;
        }

        var Pass = getOccurrence(items, 'Promoted');
        var Fail = getOccurrence(items, 'Fail');
        document.getElementById('promoted').innerHTML = Pass;
        document.getElementById('tPass').value = Pass;
        document.getElementById('fail').innerHTML = Fail;
        document.getElementById('tFail').value = Fail;
    </script>
    @endsection