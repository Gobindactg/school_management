<style>
    body {
        border: 1px solid black;
        padding: 5px;
        margin: 0;


    }

    .main {
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .table_body table {
        width: 100%;
        margin: 0;
        padding: 3px;

    }

    .table_body p {
        text-align: left;
    }

    .result table {
        border: .5px solid black;
        border-collapse: collapse;
        text-align: center;

    }

    .result th {
        border: .5px solid black;
        border-collapse: collapse;
        padding: 10px;
    }

    .result td {
        border: .5px solid black;
        border-collapse: collapse;
        padding: 10px;

    }

    .custom {
        border-top: 1px dotted black;
        margin: 0;
        margin-left: 20%;
        width: 200px;

    }
</style>

<body>


    @foreach ($marks as $marks)
    <div class="main_body">
        @foreach (App\Models\Institution_info::institution() as $institution)
        <h3 class="main" style="padding:10px; color:teal; font-family:tahoma; font-style:italic; font-size:20px;text-transform: uppercase;">{{ $institution->name }}</h3>
        <p class="main">{{ $institution->address }}</p>
        <p class="main"> {{ $institution->upazila->name }} ,
            {{ $institution->district->name }} ,
            {{ $institution->division->name }}
        </p>
        <h3 class="main" style="padding-top:20px; padding-bottom:20px; color:teal; font-family:tahoma; font-style:italic">First Terminal Examination</h3>
        <div class="table_body">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p> <strong>Student Name : </strong> {{ $marks->name }} </p>
                            <p> <strong>Father's Name : </strong> {{ $marks->student_info->father_name }} </p>
                            <p> <strong>Mother's Name : </strong> {{ $marks->student_info->mother_name }} </p>
                        </th>
                        <th>
                            <p> <strong>Class : </strong> {{ $marks->class }} </p>
                            <p> <strong>Roll : </strong> {{ $marks->st_roll }} </p>
                            <p> <strong>Date Of Birth : </strong> {{ $marks->student_info->date_of_birth }} </p>
                        </th>
                        <th style="margin-right:0px; padding-right:0px">
                            @if($marks->student_info->image ==NULL)
                            <div style="border: .50px solid black; height:100px; width:100px; text-align:center; ">Image</div>
                            @else
                            <img src="{{ asset('Frontend/studentImage/' . $marks->student_info->image) }}" class="card-img-top " alt="{{ $marks->name }}" style="width:100px;">
                            @endif
                        </th>
                    </tr>
                </thead>
            </table>
        </div>

        @endforeach
        <div class="result" style="padding-top: 20px;">
            <table style="width: 100%;">
                <thead>
                    <tr style="background-color:#D6EAF8;">
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
                    <tr>
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
                        <td colspan="7" style="text-align: left; background-color:#D6EAF8;"><strong>Additional Subject</strong> </td>
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
                            @php
                            $bangla = $marks->bangla;
                            $english = $marks->english;
                            $math = $marks->math;
                            $science = $marks->science;
                            $bob = $marks->bob;
                            $religion = $marks->religion;
                            $music = $marks->music;
                            $expressive= $marks->expressive_art;
                            $physical = $marks->physical;

                            if($marks->bangla >= 80)
                            $gpaB = 5;
                            elseif($marks->bangla >= 70)
                            $gpaB = 4;
                            elseif($marks->bangla >= 60)
                            $gpaB = 3.5;
                            elseif($marks->bangla >= 50)
                            $gpaB = 3;
                            elseif($marks->bangla >= 40)
                            $gpaB = 2;
                            elseif($marks->bangla >= 33)
                            $gpaB = 1;
                            else
                            $gpaB = 0;

                            if($marks->english >= 80)
                            $gpaE = 5;
                            elseif($marks->english >= 70)
                            $gpaE = 4;
                            elseif($marks->english >= 60)
                            $gpaE = 3.5;
                            elseif($marks->english >= 50)
                            $gpaE = 3;
                            elseif($marks->english >= 40)
                            $gpaE = 2;
                            elseif($marks->english >= 33)
                            $gpaE = 1;
                            else
                            $gpaE = 0;


                            if($marks->math >= 80)
                            $gpaM = 5;
                            elseif($marks->math >= 70)
                            $gpaM = 4;
                            elseif($marks->math >= 60)
                            $gpaM = 3.5;
                            elseif($marks->math >= 50)
                            $gpaM = 3;
                            elseif($marks->math >= 40)
                            $gpaM = 2;
                            elseif($marks->math >= 33)
                            $gpaM = 1;
                            else
                            $gpaM = 0;

                            if($marks->science >= 80)
                            $gpaS = 5;
                            elseif($marks->science >= 70)
                            $gpaS = 4;
                            elseif($marks->science >= 60)
                            $gpaS = 3.5;
                            elseif($marks->science >= 50)
                            $gpaS = 3;
                            elseif($marks->science >= 40)
                            $gpaS = 2;
                            elseif($marks->science >= 33)
                            $gpaS = 1;
                            else
                            $gpaS = 0;

                            if($marks->bob >= 80)
                            $gpaBo = 5;
                            elseif($marks->bob >= 70)
                            $gpaBo = 4;
                            elseif($marks->bob >= 60)
                            $gpaBo = 3.5;
                            elseif($marks->bob >= 50)
                            $gpaBo = 3;
                            elseif($marks->bob >= 40)
                            $gpaBo = 2;
                            elseif($marks->bob >= 33)
                            $gpaBo = 1;
                            else
                            $gpaBo = 0;

                            if($marks->religion >= 80)
                            $gpaR = 5;
                            elseif($marks->religion >= 70)
                            $gpaR = 4;
                            elseif($marks->religion >= 60)
                            $gpaR = 3.5;
                            elseif($marks->religion >= 50)
                            $gpaR = 3;
                            elseif($marks->religion >= 40)
                            $gpaR = 2;
                            elseif($marks->religion >= 33)
                            $gpaR = 1;
                            else
                            $gpaR = 0;


                            if($marks->music >= 80)
                            $gpaMu = 5;
                            elseif($marks->music >= 70)
                            $gpaMu = 4;
                            elseif($marks->music >= 60)
                            $gpaMu = 3.5;
                            elseif($marks->music >= 50)
                            $gpaMu = 3;
                            elseif($marks->music >= 40)
                            $gpaMu = 2;
                            elseif($marks->music >= 33)
                            $gpaMu = 1;
                            else
                            $gpaMu = 0;


                            if($marks->expressive_art >= 80)
                            $gpaEx = 5;
                            elseif($marks->expressive_art >= 70)
                            $gpaEx = 4;
                            elseif($marks->expressive_art >= 60)
                            $gpaEx = 3.5;
                            elseif($marks->expressive_art >= 50)
                            $gpaEx = 3;
                            elseif($marks->expressive_art >= 40)
                            $gpaEx = 2;
                            elseif($marks->expressive_art >= 33)
                            $gpaEx = 1;
                            else
                            $gpaEx = 0;


                            if($marks->physical >= 80)
                            $gpaPh = 5;
                            elseif($marks->physical >= 70)
                            $gpaPh = 4;
                            elseif($marks->physical >= 60)
                            $gpaPh = 3.5;
                            elseif($marks->physical >= 50)
                            $gpaPh = 3;
                            elseif($marks->physical >= 40)
                            $gpaPh = 2;
                            elseif($marks->physical >= 33)
                            $gpaPh = 1;
                            else
                            $gpaPh = 0;


                            if(isset($_GET['add_subject'])){
                            if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33 or $music < 33 or $expressive < 33 or $physical < 33){ $averageGpa=0; } else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR + $gpaMu + $gpaEx + $gpaPh; $averageGpa=$totalGpa / 9; } } else{if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33){ $averageGpa=0; }else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR ; $averageGpa=$totalGpa / 6; } } echo round($averageGpa, 2); @endphp </td>
                        <td colspan="1">Obtain Grade</td>
                        <td id="grade">
                            @php
                            if($averageGpa >= 5){
                            echo 'A+';
                            }
                            elseif($averageGpa >= 4){
                            echo 'A';
                            }
                            elseif($averageGpa >= 3.5){
                            echo 'A-';
                            }
                            elseif($averageGpa >= 3){
                            echo 'B';
                            }
                            elseif($averageGpa >= 2){
                            echo 'C';
                            }
                            elseif($averageGpa >= 1){
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

        </div>
        <div style=" bottom:5px; position:absolute; width:100%">
            <table style="width: 100%; ">
                <thead>
                    <tr style=" text-align:center; ">

                        <th>
                            <hr class="custom">Class Teacher Signature
                        </th>
                        <th>
                            <hr class="custom">Head Teacher Signature
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    @endforeach
</body>