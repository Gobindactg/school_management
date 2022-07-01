<style>
    .routine table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .routine th {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .routine td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .custom {
        border-top: 1px dotted black;
        margin: 0;
        padding-left: 17px;
        width: 80%;

    }
</style>
@foreach($marks as $mark )
<div style="border: 1px solid black; padding:0; margin:0; padding-left:5px; padding-right:5px; height:49%; position:relative">

    @foreach(App\Models\student_mark::institution() as $institution)
    <h2 style="text-align:center; padding:0; margin:0; color:teal; text-transform:uppercase"><strong>{{$institution->name}}</strong></h2>
    <h4 style="text-align:center; padding:0; margin:0"><strong> {{$institution->address}}, {{$institution->upazila->name}},{{$institution->district->name}}, {{$institution->division->name}} </strong></h4>
    <h2 style="font-family: tahoma; font-style:italic; text-align:center; padding:0; padding-top:5px; padding-bottom:5px; margin:0;color:teal "><strong><u>ADMIT CARD</u> </strong></h2>
    <h2 class="text-primary text-center border text-uppercase" style="padding:0; margin:0; text-align:center; font-family:tohoma; font-style:italic"><strong>
            @php if(isset($_GET['examName']))
            echo $_GET['examName'];
            @endphp
        </strong></h2>
    @endforeach

    <table style="width: 100%;">
        <thead>
            <tr>
                <th style="text-align:left">
                    <p style="font-size: 18px; padding:0; margin:0; "><strong>Name :</strong> {{$mark->name}}</p>
                    <p style="font-size: 18px; padding:0; margin:0;"><strong>Father's Name :</strong> {{$mark->student_info->father_name}}</p>
                    <p style="font-size: 18px; padding:0; margin:0;"><strong>Mother's Name :</strong> {{$mark->student_info->mother_name}}</p>
                </th>
                <th style="text-align:left">
                    <p style="font-size: 18px; padding:0; margin:0;"><strong>Roll :</strong> {{$mark->st_roll}}</p>
                    <p style="font-size: 18px; padding:0; margin:0;"><strong>Class :</strong> {{$mark->class}}</p>
                    <p style="font-size: 18px; padding:0; margin:0;"><strong>Year :</strong> {{$mark->st_year}}</p>
                </th>
                <th><img src="{{asset('Frontend/resources/img/profile-img.jpg')}}" alt="" style="width: 70px; padding-top:10px"></th>
            </tr>
        </thead>
    </table>
    <!-- Routine start -->
    @php
    if (isset($_GET['add_routine'])) {
    $add_routine = $_GET['add_routine'];
    @endphp
    <h3 style="text-align: center; margin:0; padding-top:5px; padding-bottom:5px; color:teal; font-family:tahoma; font-style:italic"><strong>EXAM SCHEDULE</strong></h3>
    <div style="width: 100%; ">
        <div style="width: 100%; " class="routine">
            <table style="width: 100%; border:1px solid black; ">
                <tr style="background-color:#D6EAF8; ">
                    <th style="width:25%">Date</th>
                    <th style="width:25%">Day</th>
                    <th style="width:25%">Time</th>
                    <th style="width:25%">Subject</th>
                </tr>
                @foreach($routine as $exam)
                <tr style="text-align: center;">
                    <td>{{$exam->exam_date}}</td>
                    <td>{{$exam->exam_day}}</td>
                    <td>{{$exam->exam_time}}</td>
                    <td>{{$exam->subject}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    @php
    }
    @endphp
    <!-- Routine End -->
    <div style=" bottom:5px; position:absolute; width:100%">
        <table style="width: 100%; ">
            <thead>
                <tr style=" text-align:center; ">
                    <th>
                        <hr class="custom"> Student Signature
                    </th>
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
<div style="height: 15px;">

</div>
@endforeach