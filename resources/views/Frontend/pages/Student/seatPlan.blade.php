@extends('Frontend.layouts.master')
@section('title', 'Seat Plan')
@section('content')
    <div class="container" style="padding: 0; margin:0;">
        <div class="row bg-info" style="margin-bottom: 15px">
            <div class="col-md-3 ">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Class</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Section</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Year</option>
                    <option value="1">2022</option>
                    <option value="2">2021</option>
                    <option value="3">2020</option>
                </select>
            </div>
            <div class="col-md-3 bg-light">
                <button href="" class="btn btn-info " style="width: 100px" type="submit">Print</button>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4 card card-body" style="width: 32%; margin:5px">
            <p class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY
                    SCHOOL</strong></p>
            <p class="text-center "> Aburhat, Jorargonj, Mirsarai, Chattogram </p>
            <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT
                    PLAN</strong></p>
            <div class="row">
                <div class="col-md-8" style="padding: 0 10px; margin:0">
                    <p style="font-size: 12px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 12px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 12px"><strong>Class :</strong> Five</p>
                </div>
                <div class="col-md-4 " style="padding: 0 0px; margin:0">
                    <img src="{{ asset('Frontend/resources/img/profile-img.jpg') }}" alt="" style="width: 100px; margin-rigt:20px">
                </div>
            </div>
        </div>
        <div class="col-md-4 card card-body" style="width: 32%; margin:5px">
            <p class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY
                    SCHOOL</strong></p>
            <p class="text-center "> Aburhat, Jorargonj, Mirsarai, Chattogram </p>
            <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT
                    PLAN</strong></p>
            <div class="row">
                <div class="col-md-8" style="padding: 0 10px; margin:0">
                    <p style="font-size: 12px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 12px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 12px"><strong>Class :</strong> Five</p>
                </div>
                <div class="col-md-4 " style="padding: 0 0px; margin:0">
                    <img src="{{ asset('Frontend/resources/img/profile-img.jpg') }}" alt="" style="width: 100px; margin-rigt:20px">
                </div>
            </div>
        </div>
        <div class="col-md-4 card card-body" style="width: 32% ; margin:5px">
            <p class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY
                    SCHOOL</strong></p>
            <p class="text-center "> Aburhat, Jorargonj, Mirsarai, Chattogram </p>
            <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT
                    PLAN</strong></p>
            <div class="row">
                <div class="col-md-8" style="padding: 0 10px; margin:0">
                    <p style="font-size: 12px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 12px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 12px"><strong>Class :</strong> Five</p>
                </div>
                <div class="col-md-4 " style="padding: 0 0px; margin:0">
                    <img src="{{ asset('Frontend/resources/img/profile-img.jpg') }}" alt="" style="width: 100px; margin-rigt:20px">
                </div>
            </div>
        </div>
        <div class="col-md-4 card card-body" style="width: 32%; margin:5px">
            <p class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY
                    SCHOOL</strong></p>
            <p class="text-center "> Aburhat, Jorargonj, Mirsarai, Chattogram </p>
            <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT
                    PLAN</strong></p>
            <div class="row">
                <div class="col-md-8" style="padding: 0 10px; margin:0">
                    <p style="font-size: 12px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 12px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 12px"><strong>Class :</strong> Five</p>
                </div>
                <div class="col-md-4 " style="padding: 0 0px; margin:0">
                    <img src="{{ asset('Frontend/resources/img/profile-img.jpg') }}" alt="" style="width: 100px; margin-rigt:20px">
                </div>
            </div>
        </div>
        <div class="col-md-4 card card-body" style="width: 32%; margin:5px">
            <p class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY
                    SCHOOL</strong></p>
            <p class="text-center "> Aburhat, Jorargonj, Mirsarai, Chattogram </p>
            <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT
                    PLAN</strong></p>
            <div class="row">
                <div class="col-md-8" style="padding: 0 10px; margin:0">
                    <p style="font-size: 12px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 12px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 12px"><strong>Class :</strong> Five</p>
                </div>
                <div class="col-md-4 " style="padding: 0 0px; margin:0">
                    <img src="{{ asset('Frontend/resources/img/profile-img.jpg') }}" alt="" style="width: 100px; margin-rigt:20px">
                </div>
            </div>
        </div>
        <div class="col-md-4 card card-body" style="width: 32%; margin:5px">
            <p class="text-primary text-center" style="padding-top: 10px"><strong>SHAHEBDINOGOR GOVT. PRIMARY
                    SCHOOL</strong></p>
            <p class="text-center "> Aburhat, Jorargonj, Mirsarai, Chattogram </p>
            <p class="text-primary text-center border" style="font-family: tahoma; font-style:italic"><strong>SEAT
                    PLAN</strong></p>
            <div class="row">
                <div class="col-md-8" style="padding: 0 10px; margin:0">
                    <p style="font-size: 12px"><strong>Name :</strong> Noipunno Das</p>
                    <p style="font-size: 12px"><strong>Roll :</strong> 01</p>
                    <p style="font-size: 12px"><strong>Class :</strong> Five</p>
                </div>
                <div class="col-md-4 " style="padding: 0 0px; margin:0">
                    <img src="{{ asset('Frontend/resources/img/profile-img.jpg') }}" alt="" style="width: 100px; margin-rigt:20px">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
