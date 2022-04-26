@extends('Frontend.layouts.master')
@section('title', 'Admit')
@section('content')
  <div class="container my-2">
                <div class="row">
                    
                        <div class="col-md-3">
                            <form action="{{route('search.admit')}}" method="get">
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
            <button href="" class="btn btn-info " style="width: 100px" type="submit" >Print</button>
            @foreach($marks as $mark)
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
            <h2 class="text-primary text-center border"><strong>EXAM SCHEDULE</strong></h2>
            <table class="table table-bordered">
                <tr class="text-center">
                    <th>Date</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Subject</th>
                </tr>
                <tr class="text-center">
                    <td>03.04.2022</td>
                    <td>Saturday</td>
                    <td>10.00-1.00</td>
                    <td>Bangla</td>
                    <td>04.04.2022</td>
                    <td>Sunday</td>
                    <td>10.00-1.00</td>
                    <td>English</td>
                </tr>
                <tr class="text-center">
                    <td>03.04.2022</td>
                    <td>Saturday</td>
                    <td>10.00-1.00</td>
                    <td>Bangla</td>
                    <td>04.04.2022</td>
                    <td>Sunday</td>
                    <td>10.00-1.00</td>
                    <td>English</td>
                </tr>
                <tr class="text-center">
                    <td>03.04.2022</td>
                    <td>Saturday</td>
                    <td>10.00-1.00</td>
                    <td>Bangla</td>
                    <td>04.04.2022</td>
                    <td>Sunday</td>
                    <td>10.00-1.00</td>
                    <td>English</td>
                </tr>
                <tr class="text-center">
                    <td>03.04.2022</td>
                    <td>Saturday</td>
                    <td>10.00-1.00</td>
                    <td>Bangla</td>
                    <td>04.04.2022</td>
                    <td>Sunday</td>
                    <td>10.00-1.00</td>
                    <td>English</td>
                </tr>
            </table>
            <div class="row " style="padding-top: 30px">
                <div class="col-md-6 text-center">Assistant Teacher</div>
                <div class="col-md-6 text-center">Head Teacher</div>
            </div>
        </div>
   @endforeach
    </div>
</div>
@endsection