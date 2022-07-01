@extends('Frontend.layouts.master')
@section('title', 'Seat Plan')
@section('content')
<div class="container" style="padding: 0; margin:0;">
    <form action="{{route('seatPlanPDF')}}" target="_blank" method="get">
        <div class="row">
            <div class="col-md-3">
                <select name="examName" id="" class="form-control">
                    <option value="">-- Select Exam Name --</option>
                    <option value="First Terminal Exam"> First Terminal Exam</option>
                    <option value="Second Terminal Exam">Second Terminal Exam</option>
                    <option value="Annual examination">Annual Exam</option>
                </select>
            </div>
            <div class="col-md-2">

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
            <div class="col-md-2">
                <select class="form-select " id="exampleFormControlSelect1" name="year">
                    <option selected value="">Select Year</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>

            <div class="col-md-2">
                <input type="submit" value="Print" class="btn btn-info w-100">
    </form>
</div>

</div>
</div>


<div class="row">
    @foreach($marks as $mark)
    <div class="bg-light" style="margin:5px; width:32%">
        @foreach(App\Models\student_mark::institution() as $institution)
        <h6 class="text-primary text-center" style="padding-top: 10px"><strong>{{$institution->name}}</strong></h6>
        <p class="text-center "><strong> {{$institution->address}}, {{$institution->upazila->name}},{{$institution->district->name}}</strong></p>
        <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT PLAN</strong></p>
        @endforeach
        <div class="row">
            <div class="col-md-7" style="padding-left:10px  ; margin:0">
                <p style="font-size: 12px"><strong>Name :</strong> {{$mark->name}}</p>
                <p style="font-size: 12px"><strong>Roll :</strong> {{$mark->st_roll}}</p>
                <p style="font-size: 12px"><strong>Class :</strong> {{$mark->class}}</p>
            </div>
            <div class="col-md-5 " style="padding: 0 0px; margin:0">
                <p style="font-size: 12px"><strong>Group :</strong> {{$mark->st_group}}</p>
                <p style="font-size: 12px"><strong>Year :</strong> {{$mark->st_year}}</p>

            </div>
            <p style="font-size: 12px; padding-top:5px; padding-bottom:0px; padding-left:52%"><strong>Signature of Head</strong> </p>
        </div>

    </div>
    @endforeach
</div>
</div>

@endsection