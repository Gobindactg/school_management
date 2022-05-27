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
 $totalGpa = $gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR + $gpaMu + $gpaEx + $gpaPh;
 $averageGpa = $totalGpa / 9;
 }else{
 $totalGpa = $gpaB + $gpaE + $gpaM + $gpaS + $gpaBo + $gpaR;
 $averageGpa = $totalGpa / 6;
 }

 $aGpa = $averageGpa;


 @endphp