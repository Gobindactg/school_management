@extends('Frontend.layouts.master')
@section('title', 'Admit')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

<div class="container my-2">
    <div class="row">
        <div class="col-md-3">
            <form action="{{route('search.admit')}}" method="get">

                <select class="form-select " name="class" id="class_admit">
                    <option value="">--Select Class--</option>
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
        <div class="col-md-2 text-center bg-light pt-2">
            <input type="checkbox" id="add_routine" name="add_routine" value="add" class="form-check-input">
            <label class="form-check-label" for="flexCheckDefault">
                Add Routine
            </label>
        </div>
        <div class="col-md-1">
            <input type="submit" value="Search" class="btn btn-info w-100">
            </form>
        </div>

    </div>
</div>

<button href="" class="btn btn-info " style="width: 100px" type="submit">Print</button>
@foreach($marks as $mark )
<div class="col-md-12 card card-body">

    @foreach(App\Models\student_mark::institution() as $institution)
    <h2 class="text-primary text-center" style="padding-top: 10px"><strong>{{$institution->name}}</strong></h2>
    <h4 class="text-center "><strong> {{$institution->address}}, {{$institution->upazila->name}},{{$institution->district->name}}, {{$institution->division->name}} </strong></h4>
    <h2 class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>ADMIT CARD</strong></h2>
    @endforeach

    <div class="row">
        <div class="col-md-6">
            <p style="font-size: 18px"><strong>Name :</strong> {{$mark->name}}</p>
            <p style="font-size: 18px"><strong>Father's Name :</strong> {{$mark->student_info->father_name}}</p>
            <p style="font-size: 18px"><strong>Mother's Name :</strong> {{$mark->student_info->mother_name}}</p>
        </div>
        <div class="col-md-3">
            <p style="font-size: 18px"><strong>Roll :</strong> {{$mark->st_roll}}</p>
            <p style="font-size: 18px"><strong>Class :</strong> {{$mark->class}}</p>
            <p style="font-size: 18px"><strong>Year :</strong> {{$mark->st_year}}</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="{{asset('Frontend/resources/img/profile-img.jpg')}}" alt="" style="width: 100px; padding-top:10px">
        </div>
    </div>
    @php
    if (isset($_GET['add_routine'])) {
    $add_routine = $_GET['add_routine'];
    @endphp
    <h2 class="text-primary text-center border"><strong>EXAM SCHEDULE</strong></h2>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th style="width:25%">Date</th>
                    <th style="width:25%">Day</th>
                    <th style="width:25%">Time</th>
                    <th style="width:25%">Subject</th>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th style="width:25%">Date</th>
                    <th style="width:25%">Day</th>
                    <th style="width:25%">Time</th>
                    <th style="width:25%">Subject</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="row" id="data_show">
        @foreach($routine as $exam)
        <div class="col-md-6" style="margin:0;">
            <table class="table table-bordered">
                <td>{{$exam->exam_date}}</td>
                <td>{{$exam->exam_day}}</td>
                <td>{{$exam->exam_time}}</td>
                <td>{{$exam->subject}}</td>
            </table>
        </div>
        @endforeach
    </div>
    @php
    }
    @endphp
    <div class="row " style="padding-top: 60px">
        <div class="col-md-6 text-left pl-5">Assistant Teacher</div>
        <div class="col-md-6 "><span style="padding-left:60%">Head Teacher</span> </div>
    </div>
</div>
</div>
</div>
</div>
@endforeach


</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {


        // $(document).ready(function(){

        //     $("#class_admit").change(function(){
        //         var class_admit = $("#class_admit").val();

        //          $("#data_show").html("");
        //             var option = "";
        //           $.get("http://localhost/School_Management/public/get-admit/"+class_admit, 
        //             function(data){
        //               data = JSON.parse(data);
        //               data.forEach(function(element){

        //                   option += "<div class='col-md-6'><table class='table table-bordered'><tr><th style='width:25%'>"+ element.exam_date +"</th>" 
        //                             +"<th style='width:25%'>"+ element.exam_day +"</th>" 
        //                             +"<th style='width:25%'>"+ element.exam_title +"</th>" 
        //                             +"<th style='width:25%'>"+ element.exam_time +"</th></tr></table></div>" 
        //               })
        //               $("#data_show").html(option);


        //          });
        //     });
        // }); 
        //    $(document).ready(function(){
        //     $("#class_id").change(function(){

        //     var class = $("#class_id").val();
        //       alert(class);
        //     // send an ajaz request to server with this division
        //     $("#data_show").html("");
        //     var option = "";
        //     $.get("http://localhost/School_Management/public/get-class/"+class, 
        //     function(data){
        //       data = JSON.parse(data);
        //       data.forEach(function(element){

        //           option += "<tr><th>"+ element.exam_date +" </th></tr> " 
        //       })
        //       $("#data_show").html(option);


        //     });

        //     });
        // });

        $("#class_admit").change(function() {
            var class_admit = $("#class_admit").val();

            $("#data_show").html("");
            var option = "";
            $.get("http://localhost/School_Management/public/get-admit/" + class_admit,
                function(data) {
                    data = JSON.parse(data);
                    data.forEach(function(element) {

                        option +=
                            "<div class='col-md-6'><table class='table table-bordered'><tr><th style='width:25%'>" +
                            element.exam_date + "</th>" +
                            "<th style='width:25%'>" + element.exam_day + "</th>" +
                            "<th style='width:25%'>" + element.exam_title + "</th>" +
                            "<th style='width:25%'>" + element.exam_time +
                            "</th></tr></table></div>"
                    })
                    $("#data_show").html(option);


                });
        });
    });
    //    $(document).ready(function(){
    //     $("#class_id").change(function(){


    //     var class = $("#class_id").val();
    //       alert(class);
    //     // send an ajaz request to server with this division
    //     $("#data_show").html("");
    //     var option = "";
    //     $.get("http://localhost/School_Management/public/get-class/"+class, 
    //     function(data){
    //       data = JSON.parse(data);
    //       data.forEach(function(element){

    //           option += "<tr><th>"+ element.exam_date +" </th></tr> " 
    //       })
    //       $("#data_show").html(option);


    //     });

    //     });
    // });
</script>

@endsection