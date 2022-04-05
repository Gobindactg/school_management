@extends('Fontend.layouts.master')
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
            <div class="col-md-3">
                <select class="form-select" aria-label="Default select example" id="subject">
                    <option selected>Select Subject</option>
                    <option value="bangla">Bangla</option>
                    <option value="english">English</option>
                    <option value="math">Math</option>
                    <option value="science">Science</option>
                    <option value="bob">BOB</option>
                    <option value="religion">Religion</option>
                </select>
            </div>
        </div>
        <!-- start Bangla-->
        <div class="row hidden" id="bangla_mark">
            <div class="col-md-12 card card-body " style="width: 32%; margin:5px">
                <h3 class="text-primary"><strong>Enter Bangla Mark</strong> </h3>
                <table class="table table-bordered border-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Bangla Mark</th>
                        <th>Action</th>
                    </tr>
                    <tr class="text-center">
                        <td>#01</td>
                        <td>01</td>
                        <td>Noipunno</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#02</td>
                        <td>02</td>
                        <td>Noipunno</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#03</td>
                        <td>03</td>
                        <td>Noipunno</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#04</td>
                        <td>04</td>
                        <td>Noipunno</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end Bangla-->
        <!-- start english-->
        <div class="row hidden" id="english_mark">
            <div class="col-md-12 card card-body " style="width: 32%; margin:5px">
                <h3 class="text-primary"><strong>Enter English Mark</strong> </h3>
                <table class="table table-bordered border-primary">
                    <tr class="text-center">
                        <th >#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Bangla Mark</th>
                        <th>Action</th>
                    </tr>
                    <tr class="text-center">
                        <td>#01</td>
                        <td>01</td>
                        <td>Monir</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#02</td>
                        <td>02</td>
                        <td>Monir</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#03</td>
                        <td>03</td>
                        <td>Monir</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#04</td>
                        <td>04</td>
                        <td>Monir</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end English-->

         <!-- start Math-->
         <div class="row hidden" id="math_mark">
            <div class="col-md-12 card card-body " style="width: 32%; margin:5px">
                <h3 class="text-primary"><strong>Enter Math Mark</strong> </h3>
                <table class="table table-bordered border-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Bangla Mark</th>
                        <th>Action</th>
                    </tr>
                    <tr class="text-center">
                        <td>#01</td>
                        <td>01</td>
                        <td>Akash</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#02</td>
                        <td>02</td>
                        <td>Akash</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#03</td>
                        <td>03</td>
                        <td>Akash</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#04</td>
                        <td>04</td>
                        <td>Akash</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end math-->

         <!-- start Science-->
         <div class="row hidden" id="science_mark">
            <div class="col-md-12 card card-body " style="width: 32%; margin:5px">
                <h3 class="text-primary"><strong>Enter Science Mark</strong> </h3>
                <table class="table table-bordered border-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Bangla Mark</th>
                        <th>Action</th>
                    </tr>
                    <tr class="text-center">
                        <td>#01</td>
                        <td>01</td>
                        <td>Mita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#02</td>
                        <td>02</td>
                        <td>Mita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#03</td>
                        <td>03</td>
                        <td>Mita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#04</td>
                        <td>04</td>
                        <td>Mita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end Science-->

         <!-- start english-->
         <div class="row hidden" id="bob_mark">
            <div class="col-md-12 card card-body " style="width: 32%; margin:5px">
                <h3 class="text-primary"><strong>Enter Bangladesh And Global Study</strong> </h3>
                <table class="table table-bordered border-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Bangla Mark</th>
                        <th>Action</th>
                    </tr>
                    <tr class="text-center">
                        <td>#01</td>
                        <td>01</td>
                        <td>Aurpita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#02</td>
                        <td>02</td>
                        <td>Aurpita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#03</td>
                        <td>03</td>
                        <td>Aurpita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#04</td>
                        <td>04</td>
                        <td>Aurpita</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end bob-->

         <!-- start religion-->
         <div class="row hidden" id="religion_mark">
            <div class="col-md-12 card card-body " style="width: 32%; margin:5px">
                <h3 class="text-primary"><strong>Enter Religion Mark</strong> </h3>
                <table class="table table-bordered border-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Bangla Mark</th>
                        <th>Action</th>
                    </tr>
                    <tr class="text-center">
                        <td>#01</td>
                        <td>01</td>
                        <td>Monika</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#02</td>
                        <td>02</td>
                        <td>Monika</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#03</td>
                        <td>03</td>
                        <td>Monika</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td>#04</td>
                        <td>04</td>
                        <td>Monika</td>
                        <td><input type="number" class="form-control" name="bangla"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end religion-->
    </div>


    <style>
        .hidden {
            display: none;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#subject").change(function() {
                $subject_types = $("#subject").val();

                if ($subject_types == "bangla") {
                    $("#bangla_mark").removeClass('hidden');
                    $("#english_mark").addClass('hidden');
                    $("#math_mark").addClass('hidden');
                    $("#science_mark").addClass('hidden');
                    $("#bob_mark").addClass('hidden');
                    $("#religion_mark").addClass('hidden');

                } else if ($subject_types == "english") {
                    $("#bangla_mark").addClass('hidden');
                    $("#english_mark").removeClass('hidden');
                    $("#math_mark").addClass('hidden');
                    $("#science_mark").addClass('hidden');
                    $("#bob_mark").addClass('hidden');
                    $("#religion_mark").addClass('hidden');
                }else if ($subject_types == "math") {
                    $("#bangla_mark").addClass('hidden');
                    $("#english_mark").addClass('hidden');
                    $("#math_mark").removeClass('hidden');
                    $("#science_mark").addClass('hidden');
                    $("#bob_mark").addClass('hidden');
                    $("#religion_mark").addClass('hidden');
                }else if ($subject_types == "science") {
                    $("#bangla_mark").addClass('hidden');
                    $("#english_mark").addClass('hidden');
                    $("#math_mark").addClass('hidden');
                    $("#science_mark").removeClass('hidden');
                    $("#bob_mark").addClass('hidden');
                    $("#religion_mark").addClass('hidden');
                }else if ($subject_types == "bob") {
                    $("#bangla_mark").addClass('hidden');
                    $("#english_mark").addClass('hidden');
                    $("#math_mark").addClass('hidden');
                    $("#science_mark").addClass('hidden');
                    $("#bob_mark").removeClass('hidden');
                    $("#religion_mark").addClass('hidden');
                }else if ($subject_types == "religion") {
                    $("#bangla_mark").addClass('hidden');
                    $("#english_mark").addClass('hidden');
                    $("#math_mark").addClass('hidden');
                    $("#science_mark").addClass('hidden');
                    $("#bob_mark").addClass('hidden');
                    $("#religion_mark").removeClass('hidden');
                }
            });
        });
    </script>
@endsection
