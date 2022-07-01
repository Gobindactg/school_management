   <style>
       .main {
           text-align: center;
           margin: 0;
           padding: 1px;
       }

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
       }

       .result_body td {
           border: 1px solid black;
           border-collapse: collapse;
       }

       .custom {
           border-top: 1px dotted black;
           margin: 0;
           margin-left: 20%;
           width: 200px;

       }
   </style>

   <div class="mt-3 bg-light pt-2 px-2">
       @foreach(App\Models\student_mark::institution() as $institution)
       <h2 style="text-align:center; padding:0; margin:0; color:teal; text-transform:uppercase"><strong>{{$institution->name}}</strong></h2>
       <h4 style="text-align:center; padding:0; margin:0"><strong> {{$institution->address}}, {{$institution->upazila->name}},{{$institution->district->name}}, {{$institution->division->name}} </strong></h4>
       <h2 style="font-family: tahoma; font-style:italic; text-align:center; padding:0; padding-top:5px; padding-bottom:5px; margin:0;color:teal "><strong><u>PUBLISHED RESULT</u> </strong></h2>
       <h2 class="text-primary text-center border text-uppercase" style="padding:0; margin:0; text-align:center; font-family:tohoma; font-style:italic"><strong>
               @php if(isset($_GET['examName']))
               echo $_GET['examName'];
               @endphp
           </strong></h2>
       @endforeach

       <table class="result_body" id="result_body">
           <thead>
               <tr class="text-center">
                   <th>S.L</th>
                   <th>Roll</th>
                   <th>Class</th>
                   <th>Group</th>
                   <th>Name</th>
                   <th>Total Mark</th>
                   <th>GPA</th>
                   <th>Status</th>
               </tr>
           </thead>
           <tbody>
               @foreach($resultPublished as $result)
               <tr class="text-center">
                   <td>{{+$loop->index+1}}</td>
                   <td>{{$result->st_roll}}</td>
                   <td>{{$result->class}}</td>
                   <td>{{$result->st_group}}</td>
                   <td>{{$result->name}}</td>
                   <td>
                       @php
                       $bangla = $result->bangla;
                       $english = $result->english;
                       $math = $result->math;
                       $science = $result->science;
                       $bob = $result->bob;
                       $religion = $result->religion;
                       $music = $result->music;
                       $expressive= $result->expressive_art;
                       $physical = $result->physical;

                       if (isset($_GET['add'])){
                       $total = $bangla + $english + $math + $science + $bob + $religion + $music + $expressive + $physical;
                       }else{
                       $total = $bangla + $english + $math + $science + $bob + $religion;
                       }
                       echo $total;
                       @endphp
                   </td>
                   <td id="averageGpa">
                       @php
                       $bangla = $result->bangla;
                       $english = $result->english;
                       $math = $result->math;
                       $science = $result->science;
                       $bob = $result->bob;
                       $religion = $result->religion;
                       $music = $result->music;
                       $expressive= $result->expressive_art;
                       $physical = $result->physical;

                       if($result->bangla >= 80)
                       $gpaB = 5;
                       elseif($result->bangla >= 70)
                       $gpaB = 4;
                       elseif($result->bangla >= 60)
                       $gpaB = 3.5;
                       elseif($result->bangla >= 50)
                       $gpaB = 3;
                       elseif($result->bangla >= 40)
                       $gpaB = 2;
                       elseif($result->bangla >= 33)
                       $gpaB = 1;
                       else
                       $gpaB = 0;

                       if($result->english >= 80)
                       $gpaE = 5;
                       elseif($result->english >= 70)
                       $gpaE = 4;
                       elseif($result->english >= 60)
                       $gpaE = 3.5;
                       elseif($result->english >= 50)
                       $gpaE = 3;
                       elseif($result->english >= 40)
                       $gpaE = 2;
                       elseif($result->english >= 33)
                       $gpaE = 1;
                       else
                       $gpaE = 0;


                       if($result->math >= 80)
                       $gpaM = 5;
                       elseif($result->math >= 70)
                       $gpaM = 4;
                       elseif($result->math >= 60)
                       $gpaM = 3.5;
                       elseif($result->math >= 50)
                       $gpaM = 3;
                       elseif($result->math >= 40)
                       $gpaM = 2;
                       elseif($result->math >= 33)
                       $gpaM = 1;
                       else
                       $gpaM = 0;

                       if($result->science >= 80)
                       $gpaS = 5;
                       elseif($result->science >= 70)
                       $gpaS = 4;
                       elseif($result->science >= 60)
                       $gpaS = 3.5;
                       elseif($result->science >= 50)
                       $gpaS = 3;
                       elseif($result->science >= 40)
                       $gpaS = 2;
                       elseif($result->science >= 33)
                       $gpaS = 1;
                       else
                       $gpaS = 0;

                       if($result->bob >= 80)
                       $gpaBo = 5;
                       elseif($result->bob >= 70)
                       $gpaBo = 4;
                       elseif($result->bob >= 60)
                       $gpaBo = 3.5;
                       elseif($result->bob >= 50)
                       $gpaBo = 3;
                       elseif($result->bob >= 40)
                       $gpaBo = 2;
                       elseif($result->bob >= 33)
                       $gpaBo = 1;
                       else
                       $gpaBo = 0;

                       if($result->religion >= 80)
                       $gpaR = 5;
                       elseif($result->religion >= 70)
                       $gpaR = 4;
                       elseif($result->religion >= 60)
                       $gpaR = 3.5;
                       elseif($result->religion >= 50)
                       $gpaR = 3;
                       elseif($result->religion >= 40)
                       $gpaR = 2;
                       elseif($result->religion >= 33)
                       $gpaR = 1;
                       else
                       $gpaR = 0;


                       if($result->music >= 80)
                       $gpaMu = 5;
                       elseif($result->music >= 70)
                       $gpaMu = 4;
                       elseif($result->music >= 60)
                       $gpaMu = 3.5;
                       elseif($result->music >= 50)
                       $gpaMu = 3;
                       elseif($result->music >= 40)
                       $gpaMu = 2;
                       elseif($result->music >= 33)
                       $gpaMu = 1;
                       else
                       $gpaMu = 0;


                       if($result->expressive_art >= 80)
                       $gpaEx = 5;
                       elseif($result->expressive_art >= 70)
                       $gpaEx = 4;
                       elseif($result->expressive_art >= 60)
                       $gpaEx = 3.5;
                       elseif($result->expressive_art >= 50)
                       $gpaEx = 3;
                       elseif($result->expressive_art >= 40)
                       $gpaEx = 2;
                       elseif($result->expressive_art >= 33)
                       $gpaEx = 1;
                       else
                       $gpaEx = 0;


                       if($result->physical >= 80)
                       $gpaPh = 5;
                       elseif($result->physical >= 70)
                       $gpaPh = 4;
                       elseif($result->physical >= 60)
                       $gpaPh = 3.5;
                       elseif($result->physical >= 50)
                       $gpaPh = 3;
                       elseif($result->physical >= 40)
                       $gpaPh = 2;
                       elseif($result->physical >= 33)
                       $gpaPh = 1;
                       else
                       $gpaPh = 0;


                       if(isset($_GET['add'])){
                       if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33 or $music < 33 or $expressive < 33 or $physical < 33){ $averageGpa=0; } else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR + $gpaMu + $gpaEx + $gpaPh; $averageGpa=$totalGpa / 9; } } else{if($bangla < 33 or $english < 33 or $math < 33 or $science < 33 or $bob < 33 or $religion < 33){ $averageGpa=0; }else{$totalGpa=$gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR ; $averageGpa=$totalGpa / 6; } } echo round($averageGpa, 2); @endphp </td>
                   <td id="resultshow">
                       @php
                       if($averageGpa <= 0) echo '<span style="color:red;">Fail</span>' ; else echo '<span style="color:green; font-size:18px">Promoted</span>' ; @endphp </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       <div style="  position:absolute; width:100%; padding-top:40px">
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

   </div>
  