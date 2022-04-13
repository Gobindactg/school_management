@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('content')
    <?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=school_management;charse=utf8', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    ?>

<div class="container" style="padding: 0; margin:0;">
    <div class="row bg-info" style="margin-bottom: 15px">
        <div class="col-md-4 ">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Class</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Section</option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Year</option>
                <option value="1">2022</option>
                <option value="2">2021</option>
                <option value="3">2020</option>
            </select>
        </div>
       
    </div>
    <div class="container">
       
        <table class="table">

            <thead class="thead-dark">
                <tr class="show">
                    <th  >Roll</th>
                    <th  >Name</th>
                    <th >Class</th>
                    <th >Group</th>
                    <th>Year</th>
                    <th >Bangla</th>
                    <th >English</th>
                    <th >Math</th>
                    <th >Science</th>
                    <th >BOB</th>
                    <th >Religion</th>
                    <th >Music</th>
                    <th >Expressive</th>
                    <th >Physical</th>
                </tr>
            </thead>
            <?php

$connection = mysqli_connect('localhost','root','','school_management');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM student_marks";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)){
            
       $roll = $row['st_roll'];
       $name = $row['name'];
       $class = $row['class'];
       $group = $row['st_group'];
       $year = $row['st_year'];
       $bangla = $row['bangla'];
       $english = $row['english'];
       $math = $row['math'];
       $science = $row['science'];
       $bob = $row['bob'];
       $religion = $row['religion'];
       $music = $row['music'];
       $expressive = $row['expressive_art'];
       $physical = $row['physical'];
     
        $id = $row['id'];
      
            ?>

     <tbody class="thead-light">
        <tr class="toutput">
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'st_roll','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $roll; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'name','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $name; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'class','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $class; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'st_group','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $group; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'st_year','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $year; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'bangla','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $bangla; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'english','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $english; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'math','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $math; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'science','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $science; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'bob','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $bob; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'religion','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $religion; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'music','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $music; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'expressive_art','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $expressive; ?></div>
            </td>
            <td>
                <div contenteditable="true" onBlur="updateValue(this,'physical','<?php echo $id; ?>')" onClick="activate(this)"><?php echo $physical; ?></div>
            </td>
        </tr>
    </tbody>
     <?php

        }
        ?>
        </table>

    </div>

    <script>
        function activate(element) {
            //   alert('element');
        }

        function updateValue(element, column, id) {
            //  console.log(element.inlierText);
            var value = element.innerText
            //console.log(value+column+id)
            $.ajax({
                url: 'http://localhost/School_Management/School_Management/inline_mark_edit/backend.php',
                type: 'post',
                data: {
                    value: value,
                    column: column,
                    id: id
                },
                success: function(php_result) {
                    console.log(php_result);
                }
            })
        }
    </script>
@endsection
