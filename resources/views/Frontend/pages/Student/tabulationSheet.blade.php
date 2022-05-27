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
</style>
@section('content')
@foreach (App\Models\Institution_info::institution() as $institution)
<h3 class="text-center">{{ $institution->name }}</h3>
<p class="text-center">{{ $institution->address }}</p>
<p class="text-center"> {{ $institution->upazila->name }} ,
    {{ $institution->district->name }} ,
    {{ $institution->division->name }}
</p>
<h3 class="text-center">Tabulation Sheet</h3>

@if($add)
<div class="scrollbar scrollbar-x container">
    <table class="table text-center ">
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
                    if($averageGpa <= 0) echo '<span style="color:red;">Fail</span>' ; else echo '<span style="color:green; font-size:18px">Promoted</span>' ; @endphp </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="scrollbar scrollbar-x container">
    <table class="table text-center ">
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
                    if($averageGpa <= 0) echo '<span style="color:red;">Fail</span>' ; else echo '<span style="color:green; font-size:18px">Promoted</span>' ; @endphp </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

@endforeach
@endsection