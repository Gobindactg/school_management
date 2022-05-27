@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

<div class="container my-2">
    <div class="row">

        <div class="col-md-3">
            <form action="{{route('search.mark')}}" method="get">
                <select class="form-select " id="exampleFormControlSelect1" name="class">
                    <option selected value="">--Select Class--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
        </div>
        <div class="col-md-3">
            <select class="form-select " id="exampleFormControlSelect1" name="group">
                <option value="">-- Select Student Group --</option>
                @foreach (App\Models\StudentGroup::class_group() as $group)
                <option value="{{$group->name}}"> {{$group->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select " id="exampleFormControlSelect1" name="year">
                <option selected value="">Select Year</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="submit" value="Search" class="btn btn-info w-100">
            </form>
        </div>

    </div>
</div>

<div class="scrollbar-thin scrollbar-x container">
    <table class="table table-bordered">

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

        <tbody class="thead-light" id="data_show">
            @foreach ($marks as $mark)
            <tr class="toutput text-center table-info">
                <td>
                    <div onBlur="updateValue(this,'st_roll','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->st_roll }}</div>
                </td>
                <td class="text-left">
                    <div onBlur="updateValue(this,'name','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->name }}</div>
                </td>
                <td>
                    <div onBlur="updateValue(this,'class','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->class }}</div>
                </td>
                <td>
                    <div onBlur="updateValue(this,'st_group','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->st_group }}</div>
                </td>
                <td>
                    <div onBlur="updateValue(this,'st_year','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->st_year }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'bangla','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->bangla }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'english','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->english }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'math','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->math }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'science','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->science }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'bob','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->bob }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'religion','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->religion }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'music','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->music }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'expressive_art','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->expressive_art }}</div>
                </td>
                <td>
                    <div contenteditable="true" onBlur="updateValue(this,'physical','{{ $mark->id }}')" onClick="activate(this)">{{ $mark->physical }}</div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@include('Frontend.partial.js')
<script src="{{asset('Frontend/resources/js/jquery-3.6.0.js')}}"></script>
<!-- <script>
            $(document).ready(function(){
           
                $("#class_id").change(function(){
                var class_id = $("#class_id").val();
                // send an ajaz request to server with this division
                $("#data_show").html("");
                var option = "";
                $.get("http://localhost/School_Management/public/get-class/"+class_id, 
                function(data){
                  data = JSON.parse(data);
                  data.forEach(function(element){
                    
                      option += "<tr><td><div>"+ element.st_roll +" </div></td> " 
                                + "<td><div>"+ element.name +" </div></td>"
                                +"<td><div>"+ element.class +" </div></td>"
                                +"<td><div>"+ element.st_group +" </div></td>"
                                +"<td><div >"+ element.st_year +" </div></td>"
                                +"<td><div >"+ element.bangla +" </div></td>"
                                +"<td><div >"+ element.english +" </div></td>"
                                +"<td><div >"+ element.math +" </div></td>"
                                +"<td><div >"+ element.science +" </div></td>"
                                +"<td><div >"+ element.bob +" </div></td>"
                                +"<td><div >"+ element.religion +" </div></td>"
                                +"<td><div >"+ element.music +" </div></td>"
                                +"<td><div >"+ element.expressive_art +" </div></td>"
                                +"<td><div>"+ element.physical +" </div></td> </tr>"
                 
                  })
                  $("#data_show").html(option);
                  
                 
                });
                
                });
            });

            $(document).ready(function(){
           
                $("#year_id").change(function(){
                var year_id = $("#year_id").val();
                // send an ajaz request to server with this division
                $("#data_show").html("");
                var option = "";
                $.get("http://localhost/School_Management/public/get-class/"+year_id, 
                function(data){
                  data = JSON.parse(data);
                  data.forEach(function(element){
                    
                      option += "<tr><td><div>"+ element.st_roll +" </div></td> " 
                                + "<td><div>"+ element.name +" </div></td>"
                                +"<td><div>"+ element.class +" </div></td>"
                                +"<td><div>"+ element.st_group +" </div></td>"
                                +"<td><div >"+ element.st_year +" </div></td>"
                                +"<td><div >"+ element.bangla +" </div></td>"
                                +"<td><div >"+ element.english +" </div></td>"
                                +"<td><div >"+ element.math +" </div></td>"
                                +"<td><div >"+ element.science +" </div></td>"
                                +"<td><div >"+ element.bob +" </div></td>"
                                +"<td><div >"+ element.religion +" </div></td>"
                                +"<td><div >"+ element.music +" </div></td>"
                                +"<td><div >"+ element.expressive_art +" </div></td>"
                                +"<td><div>"+ element.physical +" </div></td> </tr>"
                 
                  })
                  $("#data_show").html(option);
                  
                 
                });
                
                });
            }); -->

<!-- // $("#class_id").change(function(){
                //     var class_id = $("#class_id").val();
                     
                // //     alert(class_id);
                // //     $("#data_show").html("")
                // //     var option = "";
                // //     $.get("http://localhost/School_Management/public/get-class/"+class_id), function(data){
                       
                // //     }

                //     $.ajax({
                //         url:"http://localhost/School_Management/public/get-class/"+ class_id,
                //         type:"POST",
                //         data = JSON.parse(data);
                //         beforeSend:function(){
                //             $("#data_show").html("<span>Working.................</span>")
                //         },
                //         success:function(data){
                //             $("#data_show").html(data); 
                //         },
                //     });
             
                // }); -->

<!-- </script> -->

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
            url: '{{ route('
            marks_store ') }}',
            type: 'post',
            data: {
                value,
                column,
                id
            },
            success: function(success_message) {
                toastr.success(success_message);
            },
            error: function(xhr, ajaxOptions, error_message) {
                toastr.error('Please Insert Correct Information');
            }
        })
    }
</script>

@endsection