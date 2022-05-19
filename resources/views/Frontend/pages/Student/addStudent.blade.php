@extends('Frontend.layouts.master')
@section('title', 'Add Student')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav class="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Institution</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="tab">
        <button class="tablinks btn badge " style="background-color:rgb(34 197 94); font-size:20px" id="P_info">Personal
            Information</button>
        <button class="tablinks btn badge" style="background-color:rgb(212 212 216); font-size:20px" id="G_info">Guardian Information</button>

    </div>
    <section class="section dashboard">
        <form action="{{ route('student_info_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="row">
                <div class="col-md-12 card-body card " id="section1" class="container-fluid bg-success text-white hidden"
                    style="margin-top:20px;">
                    <h2 class="text-primary">Student Personal Information</h2>
                    @include('Frontend.partial.message')
                    <hr>  <div class="mb-3">
                        <!--                         
                    <label for="exampleInputEmail1" class="form-label text-primary">Institution Name</label> -->
                         @foreach(App\Models\Institution_info::institution() as $institutuion)
                          <input type="hidden" class="form-control" name="institution_id" value="{{$institutuion->id}}">
                          @endforeach
                         </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Roll <span style="color:red"> *</span></label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Roll" name="student_roll">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Student Name <span style="color:red"> *</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student name" name="student_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Class <span style="color:red"> *</span></label>
                        <select name="class" id="" class="form-control">
                            <option value="">-- Select Student Class --</option>
                            <option value="0"> Class Pre Primary </option>
                            <option value="1">Class One</option>
                            <option value="2">Class Two</option>
                            <option value="3">Class Three</option>
                            <option value="4">Class Four</option>
                            <option value="5">Class Five</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Group <span style="color:red"> *</span></label>
                        <select name="group" id="" class="form-control">
                            <option value="">-- Select Student Group --</option>
                            @foreach (App\Models\StudentGroup::class_group() as $group)   
                            <option value="{{$group->name}}"> {{$group->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Accademic Year <span style="color:red"> *</span></label>
                        <select name="st_year" id="" class="form-control">
                            <option value="">-- Select Accademic Year --</option>
                            <option value="2022"> 2022 </option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Gender <span style="color:red"> *</span></label>
                        <select name="gender" id="" class="form-control">
                            <option value="">-- Select Student Gender --</option>
                            <option value="male"> Male </option>
                            <option value="female">Female</option>
                            <option value="other"> Others </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Date Of Birth <span style="color:black">(Optional)</span></label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Birth" name="student_birth">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Student Birth Registation
                            Number <span style="color:black">(Optional)</span></label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Birth Registation Number" name="student_birth_number">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Student Image <span style="color:black">(Optional)</span></label>
                            <div class="row py-2">
                                <div class="col-md-4">
                                    <div style="padding:5px 0px">
                                        <img style="width:150px; height:150px;" id="output"/>
                                    </div>
                                    <input type="file" class="form-control" name="student_image" id="student_image" accept="image/*" onchange="loadFile(event)" >
                                </div>
                             </div> 
                    </div>


                    <a id="section3" class="btn btn-info">NEXT</a>
                </div>


                <div class="col-md-12 card-body card" id="section2" class="container-fluid bg-warning"
                    style="margin-top:20px; display:none;">
                    <h2 class="text-primary ">Guardian Information</h2>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Father Name <span style="color:red"> *</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Father Name" name="f_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Mother Name <span style="color:red"> *</span></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Mother Name" name="m_name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Father NID <span style="color:black">(Optional)</span></label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Father NID Number" name="f_nid">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Mother NID <span style="color:black">(Optional)</span></label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Mother NID Number" name="m_nid">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-primary">Address <span style="color:black">(Optional)</span></label>

                        <textarea cols="30" rows="6" class="form-control" name="st_address" placeholder="Write  Address"></textarea>

                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Info</button>
                </div>
               
            </div>

            
        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#G_info").click(function() {
                $("#section2").css("display", "block");
                $("#P_info").css("background-color", "rgb(212 212 216)");
                $("#G_info").css("background-color", "rgb(34 197 94)");
                $("#section1").css("display", "none");

            });
            $("#P_info").click(function() {
                $("#section1").css("display", "block");
                $("#section2").css("display", "none");
                $("#P_info").css("background-color", "rgb(34 197 94)");
                $("#G_info").css("background-color", "rgb(212 212 216)");
            });
            $("#section3").click(function() {
                $("#section2").css("display", "block");
                $("#section1").css("display", "none");
                $("#P_info").css("background-color", "rgb(212 212 216)");
                $("#G_info").css("background-color", "rgb(34 197 94)");
            });
        });

        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src)
            }
        };
    </script>
@endsection
