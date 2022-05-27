@extends('Frontend.layouts.master')
@section('title', 'Admit')
@section('content')

<div class="container">
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
        <div class="col-md-2">
            <select class="form-select " id="exampleFormControlSelect1" name="year">
                <option selected value="">Select Year</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="examName" id="" class="form-control">
                <option value="">-- Select Exam Name --</option>
                <option value="First Terminal Exam"> First Terminal Exam</option>
                <option value="Second Terminal Exam">Second Terminal Exam</option>
                <option value="aannual examination">Annual Exam</option>
            </select>
        </div>

        <div class="col-md-1">
            <input type="submit" value="Search" class="btn btn-info w-100">
            </form>
        </div>

    </div>
    <div class="mt-3 bg-light pt-2 px-2">
        <h3 class="text-center"> SHAHEBDINOGOR GOVT. PRIMARY SCHOOL</h3>
        <P class="text-center">ABURHAT MIRSARAI CHATTOGRAM</P>
        <h5 class="text-center">Published Result</h5>
        <h5 class="text-center">First Terminal Examination</h5>

        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>S.L</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Roll</th>
                    <th>Group</th>
                    <th>Total Mark</th>
                    <th>GPA</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>Karim Uddin</td>
                    <td>5</td>
                    <td>10</td>
                    <td>Jomuna</td>
                    <td>578</td>
                    <td>4.50</td>
                    <td>Passed</td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Karim Uddin</td>
                    <td>5</td>
                    <td>10</td>
                    <td>Jomuna</td>
                    <td>578</td>
                    <td>4.50</td>
                    <td>Passed</td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Karim Uddin</td>
                    <td>5</td>
                    <td>10</td>
                    <td>Jomuna</td>
                    <td>578</td>
                    <td>4.50</td>
                    <td>Passed</td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Karim Uddin</td>
                    <td>5</td>
                    <td>10</td>
                    <td>Jomuna</td>
                    <td>578</td>
                    <td>4.50</td>
                    <td>Passed</td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Karim Uddin</td>
                    <td>5</td>
                    <td>10</td>
                    <td>Jomuna</td>
                    <td>578</td>
                    <td>4.50</td>
                    <td>Passed</td>
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Karim Uddin</td>
                    <td>5</td>
                    <td>10</td>
                    <td>Jomuna</td>
                    <td>578</td>
                    <td>4.50</td>
                    <td>Passed</td>
                </tr>
            </tbody>
        </table>
        <div class="row pb-4" style="padding-top: 60px">
            <div class="col-md-6 text-left pl-5">Assistant Teacher</div>
            <div class="col-md-6 "><span style="padding-left:60%">Head Teacher</span> </div>
        </div>
    </div>

</div>

@endsection