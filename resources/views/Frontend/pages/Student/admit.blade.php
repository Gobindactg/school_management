@extends('Frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
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
        <div class="col-md-12 card card-body">
            <button href="" class="btn btn-info " style="width: 100px" type="submit" >Print</button>
            <h2 class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY SCHOOL</strong></h2>
            <h4 class="text-center "><strong> Aburhat, Jorargonj, Mirsarai, Chattogram  </strong></h4>
            <h2 class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>ADMIT CARD</strong></h2>
            <div class="row">
                <div class="col-md-6">
                    <p style="font-size: 18px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 18px"><strong>Father's Name :</strong> Gobinda Das</p>
                    <p style="font-size: 18px"><strong>Mother's Name :</strong> Moni Das</p>
                </div>
                <div class="col-md-3">
                    <p style="font-size: 18px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 18px"><strong>Class :</strong> Five</p>
                    <p style="font-size: 18px"><strong>Year :</strong> 2022</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('images/testimonials-1.jpg')}}" alt="" style="width: 100px; padding-top:10px">
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
    </div>
</div>
@endsection