@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <?php
    // try {
    //     $db = new PDO('mysql:host=localhost;dbname=school_management;charse=utf8', 'root', '');
    // } catch (PDOException $e) {
    //     die($e->getMessage());
    // }
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
        <div class="container" style="width: 100%; overflow-x: scroll;">
            <table class="table">

                <thead class="thead-dark">
                    <tr class="show">
                        <th>Roll</th>
                        <th><span style="display: inline-block; width: 200px;">Name</span></th>
                        <th>Class</th>
                        <th>Group</th>
                        <th>Year</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>BOB</th>
                        <th>Religion</th>
                        <th>Music</th>
                        <th>Expressive</th>
                        <th>Physical</th>
                    </tr>
                </thead>
                <?php
                
                // $connection = mysqli_connect('localhost','root','','school_management');
                
                // if(!$connection){
                //     die("Not connected". mysqli_error());
                // }
                
                // $query = "SELECT * FROM student_marks";
                // $result = mysqli_query($connection,$query);
                // $count = mysqli_num_rows($result);
                // while ($row = mysqli_fetch_assoc($result)){
                
                //        $roll = $row['st_roll'];
                //        $name = $row['name'];
                //        $class = $row['class'];
                //        $group = $row['st_group'];
                //        $year = $row['st_year'];
                //        $bangla = $row['bangla'];
                //        $english = $row['english'];
                //        $math = $row['math'];
                //        $science = $row['science'];
                //        $bob = $row['bob'];
                //        $religion = $row['religion'];
                //        $music = $row['music'];
                //        $expressive = $row['expressive_art'];
                //        $physical = $row['physical'];
                
                //         $id = $row['id'];
                ?>

                <tbody class="thead-light">
                    @foreach ($marks as $mark)
                        <tr class="toutput">
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'st_roll','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->st_roll }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'name','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->name }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'class','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->class }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'st_group','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->st_group }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'st_year','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->st_year }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'bangla','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->bangla }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'english','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->english }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'math','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->math }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'science','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->science }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'bob','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->bob }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'religion','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->religion }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'music','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->music }}</div>
                            </td>
                            <td>
                                <div contenteditable="true"
                                    onBlur="updateValue(this,'expressive_art','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->expressive_art }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'physical','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->physical }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <?php
                
                // }
                ?>
            </table>

        </div>

        <script>
            function activate(element) {
                //   alert('element');
            }

            function updateValue(element, column, id) {
                var value = element.innerText
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route('marks_store') }}',
                    type: 'post',
                    data: {
                        value,
                        column,
                        id
                    },
                    success: function(success_message) {
                        // console.log(success_message);
                        toastr.success(success_message);
                    },
                    error: function(xhr, ajaxOptions, error_message) {
                        // console.log(error_message);
                        toastr.error('Invalid Action');
                    }
                })
            }
        </script>
    @endsection
