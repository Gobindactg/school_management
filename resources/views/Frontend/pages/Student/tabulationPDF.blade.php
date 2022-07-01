<style>
    .result_body {
        width: 100%;
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .result_body th {
        border: 1px solid black;
        border-collapse: collapse;
        background-color: #D6EAF8;
    }

    .result_body tr:nth-child(even) {

        background-color: #D6EAF8;
    }

    .result_body td {
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

    .custom {
        border-top: 1px dotted black;
        margin: 0;
        margin-left: 40%;
        width: 10px;

    }

    @page {
        size: auto;

        /* header: MyHeader1; */
        header: MyHeader2;
        /* footer: MyFooter1; */
        footer: MyFooter2;
    }
</style>

@foreach (App\Models\Institution_info::institution() as $institution)
<div class="card card-body">
    <div class="row ">
        <table style="width: 100%; text-align:center; margin:0; padding:0;">
            <thead>
                <tr>
                    <th style="width: 25%;text-align:left">
                        <div class="col-md-3 text-center" style="padding-top:24px; ">
                            @if($institution->image == NULL)
                            <div class="col-md-3 text-center" style="padding-top:24px"></div>
                            @else
                            <div class="col-md-3 " style="padding-top:24px; text-align:left">
                                <img src="{{ asset('institutionImage/' . $institution->image) }}" alt="" style="width: 100px;height:100px; border-radius:50%; text-align:left">
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
                                    <th id="totalStudent" style="width: 20%;">{{$totalStudent}}</th>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">Promoted Student</th>
                                    <th id="promoted"> {{$tPass}}</th>
                                </tr>
                                <tr>
                                    <th style="text-align: left;">Fail Student</th>
                                    <th id="fail">{{$tFail}}</th>
                                </tr>
                            </thead>

                        </table>

                    </th>
                </tr>
            </thead>
        </table>

    </div>


    @if($add)
    <div class="scrollbar scrollbar-x ">
        <table class="result_body" id="resultbody">
            <thead>
                <tr>
                    <th>S.L</th>
                    <th>Roll</th>
                    <th>S.Name</th>
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
                    <td>{{$results->st_roll}}</td>
                    <td>{{$results->name}}</td>
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
    <div>
        <table class="result_body" id="resultbody">
            <thead>
                <tr>
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
    <div style="  position:absolute; width:100%; padding-top:40px">
        <table style="width: 100%; ">
            <thead>
                <tr style=" text-align:center; ">

                    <th>
                        Class Teacher Signature
                    </th>
                    <th>
                        Head Teacher Signature
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<htmlpageheader name="MyHeader2">
    <table style="width:100%;">
        <tr>
            <th style="text-align: left;">User:: {{Auth::user()->name}} || Email:: {{Auth::user()->email}}</th>
            <th>Page Number :: {PAGENO}</th>
            <th style="text-align: right;">Institution Name : {{$institution->name}}</th>
        </tr>

    </table>
    <hr style="padding: 2px; margin:2px; font-size:15px; color:teal;">
</htmlpageheader>
<htmlpagefooter name="MyFooter2">
    <hr style="padding: 2px; margin:2px; font-size:15px; color:teal">
    <table style="width:100%; font-family:tahoma; font-style:italic;">
        <tr>
            <th style="text-align: left; ;">Result Printed By :: @php echo date('d/m/Y')@endphp @php echo date('h:i:sa')@endphp</th>
            <th>Page Number :: {PAGENO}/{nbpg}</th>
            <th style="text-align: right;">Result Generate By www.noipunnodigital.com</th>
        </tr>

    </table>

</htmlpagefooter>
<!-- <pageheader name="MyHeader1" content-left="User:: {{Auth::user()->name}} || Email:: {{Auth::user()->email}}" content-center="Page Number :: {PAGENO}" content-right=" Institution Name : {{$institution->name}}" header-style="font-weight: bold; color: #000000;" line="on" page="all" value="on" />
<pagefooter name="MyFooter1" content-left="Result Printed By :: @php echo date('d/m/Y')@endphp @php echo date('h:i:sa')@endphp" content-center="{PAGENO}/{nbpg}" content-right="Result Generate By Noipunno Digital" footer-style="font-size: 10pt; font-famaly:tahoma; font-style:italic;font-weight: bold; color:teal;" line="on" page="all" value="on" /> -->


<script type="text/javascript">
    window.onload = function() {
        var table = document.getElementById("resultBody");
        var totalStudents = table.querySelectorAll("tbody tr").length;
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
    document.getElementById('fail').innerHTML = Fail;
</script>
@endforeach