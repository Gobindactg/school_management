@extends('Frontend.layouts.master')
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
        <button class="tablinks btn badge " style="background-color:rgb(34 197 94); font-size:20px" id="P_info">Personal Information</button>
        <button class="tablinks btn badge"  style="background-color:rgb(212 212 216); font-size:20px" id="G_info" >Education Information</button>
        {{-- <button class="tablinks" onclick="GI();">Guardian Information</button> --}}
    </div>
    <section class="section dashboard">
        <form action="#" method="POST">
            <div class="row">
                <div class="col-md-12 card-body card " id="section1" class="container-fluid bg-success text-white hidden" style="margin-top:20px;" >
                    <h2 class="text-primary">Student Personal Information</h2>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Roll</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Roll" name="student_roll">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Student Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student name" name="student_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Gender</label>
                        <select name="gender" id="" class="form-control">
                            <option value="">-- Select Student Gender --</option>
                            <option value="head_teacher"> Male </option>
                            <option value="assistant_head_teacher">Female</option>
                            <option value="assistant_teacher"> Others </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Date Of Birth</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Birth" name="student_birth">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Student Birth Registation
                            Number</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Birth Registation Number" name="student_birth_number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Class</label>
                        <select name="gender" id="" class="form-control">
                            <option value="">-- Select Student Class --</option>
                            <option value="pre_primary"> Class Pre Primary </option>
                            <option value="one">Class One</option>
                            <option value="two">Class Two</option>
                            <option value="three">Class Three</option>
                            <option value="four">Class Four</option>
                            <option value="five">Class Five</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Group</label>
                        <select name="gender" id="" class="form-control">
                            <option value="">-- Select Student Group --</option>
                            <option value="a"> A </option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                    <a  id="section3" class="btn btn-info">NEXT</a>
                </div>


                <div class="col-md-12 card-body card" id="section2" class="container-fluid bg-warning" style="margin-top:20px; display:none;">
                    <h2 class="text-primary ">Guardian Information</h2>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Father Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Father Name" name="f_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Mother Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Student Mother Name" name="m_name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Father NID</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Father NID Number" name="f_nid">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-primary">Mother NID</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Write Mother NID Number" name="m_nid">
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-primary">Address</label>

                        <textarea cols="30" rows="6" class="form-control" name="st_address"
                            placeholder="Write  Address"></textarea>
                            <div class="card-body">
                                <textarea id="summernote">
                                  Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
                              </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Info</button>
                </div>
                
            </div>

           
        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
    
    $(document).ready(function(){
      $("#G_info").click(function(){
        $("#section2").css("display", "block");
        $("#P_info").css("background-color", "rgb(212 212 216)");
        $("#G_info").css("background-color", "rgb(34 197 94)");
        $("#section1").css("display", "none");
       
      });
      $("#P_info").click(function(){
        $("#section1").css("display", "block");
        $("#section2").css("display", "none");
        $("#P_info").css("background-color", "rgb(34 197 94)");
        $("#G_info").css("background-color", "rgb(212 212 216)");
      });
      $("#section3").click(function(){
        $("#section2").css("display", "block");
        $("#section1").css("display", "none");
        $("#P_info").css("background-color", "rgb(212 212 216)");
        $("#G_info").css("background-color", "rgb(34 197 94)");
      });
    });
     
    </script>
@endsection
