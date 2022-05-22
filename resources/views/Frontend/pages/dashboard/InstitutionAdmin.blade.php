@extends('Frontend.layouts.master')
@section('title', 'Noipunno Digital School')
@section('content')
<section class="section dashboard">
    <div class="row">
        @foreach ($institution as $institution)
        <div class="col-md-1 text-center">
            @if (!empty($institution->image))
            <img src="{{ asset('institutionImage/' . $institution->image) }}" class="card-img-top " alt="{{ $institution->name }}" style="width:100%">
            @else
            <img src="{{asset('Frontend/resources/img/logo.png')}}" class="card-img-top " alt="{{ $institution->name }}" style="width:100%">
            @endif
        </div>
        <div class="col-md-11">
            <h2 class="text-primary text-center" style=" text-transform: uppercase"><strong>
                    {{ $institution->name }}</strong></h2>
            <h4 class="text-center " style=" text-transform: uppercase"><strong>
                    {{ $institution->address }}</strong></h4>

            <p class="text-center " style=" text-transform: uppercase"><strong>
                    {{ $institution->upazila->name }} , {{ $institution->district->name }} ,
                    {{ $institution->division->name }} </strong></p>
            <h4 class="text-center " style=" text-transform: uppercase"><strong> EMIS :
                    {{ $institution->emis_number }}</strong></h4>
        </div>
        @endforeach
    </div>

    <hr>

    <div class="row mb-4">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner text-center text-light">
                    <span class="badge badge-warning" style="font-size:30px">{{App\Models\student_info::totalClass()}}</span>
                    <p class="fw-bold">Total Class</p>
                </div>
                <div class="icon">
                    <i class='bx bx-chalkboard'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner text-center text-light">
                    <span class="badge badge-warning" style="font-size:30px">4303</span>
                    <p class="fw-bold">Student Passed</p>
                </div>
                <div class="icon">
                    <i class='bx bx-badge-check'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner text-center text-light">

                    <span class="badge badge-warning" style="font-size:30px">{{App\Models\student_info::totalStudent()}}</span>
                    <p class="fw-bold">Total Student</p>

                </div>
                <div class="icon">
                    <i class='bx bxs-graduation'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner text-center text-light">
                    <span class="badge badge-success" style="font-size:30px">{{App\Models\User::totalUser()}}</span>
                    <p class="fw-bold">Now Active User</p>
                </div>
                <div class="icon">
                    <i class='bx bxs-devices'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
            </div>
        </div>
    </div>
    <div class="row bg-dark pt-3 ">
        <div class="col-md-8 scrollbar-x ">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th>Class</th>
                        <th>Total Student</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Islam</th>
                        <th>Hindu</th>
                        <th>Buddist</th>
                        <th>Khristan</th>
                    </tr>
                </thead>
                <tbody class="text-center" style="font-size:19px">
                    <tr class="bg-info">
                        <td>One</td>
                        <td>{{App\Models\student_info::totalStudentOne()}}</td>
                        <td>{{App\Models\student_info::maleOne()}}</td>
                        <td>{{App\Models\student_info::femaleOne()}}</td>
                        <td>{{App\Models\student_info::hinduOne()}}</td>
                        <td>{{App\Models\student_info::islamOne()}}</td>
                        <td>{{App\Models\student_info::buddistOne()}}</td>
                        <td>{{App\Models\student_info::kristanOne()}}</td>
                    </tr>
                    <tr class="bg-primary">
                        <td>Two</td>
                        <td>{{App\Models\student_info::totalStudentTwo()}}</td>
                        <td>{{App\Models\student_info::maleTwo()}}</td>
                        <td>{{App\Models\student_info::femaleTwo()}}</td>
                        <td>{{App\Models\student_info::hindutwo()}}</td>
                        <td>{{App\Models\student_info::islamtwo()}}</td>
                        <td>{{App\Models\student_info::buddisttwo()}}</td>
                        <td>{{App\Models\student_info::kristantwo()}}</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Three</td>
                        <td>{{App\Models\student_info::totalStudentThree()}}</td>
                        <td>{{App\Models\student_info::maleThree()}}</td>
                        <td>{{App\Models\student_info::femaleThree()}}</td>
                        <td>{{App\Models\student_info::hinduThree()}}</td>
                        <td>{{App\Models\student_info::islamThree()}}</td>
                        <td>{{App\Models\student_info::buddistThree()}}</td>
                        <td>{{App\Models\student_info::kristanThree()}}</td>
                    </tr>
                    <tr class="bg-primary">
                        <td>Four</td>
                        <td>{{App\Models\student_info::totalStudentFour()}}</td>
                        <td>{{App\Models\student_info::maleFour()}}</td>
                        <td>{{App\Models\student_info::femaleFour()}}</td>
                        <td>{{App\Models\student_info::hinduFour()}}</td>
                        <td>{{App\Models\student_info::islamFour()}}</td>
                        <td>{{App\Models\student_info::buddistFour()}}</td>
                        <td>{{App\Models\student_info::kristanFour()}}</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Five</td>
                        <td>{{App\Models\student_info::totalStudentFive()}}</td>
                        <td>{{App\Models\student_info::maleFive()}}</td>
                        <td>{{App\Models\student_info::femaleFive()}}</td>
                        <td>{{App\Models\student_info::hinduFive()}}</td>
                        <td>{{App\Models\student_info::islamFive()}}</td>
                        <td>{{App\Models\student_info::buddistFive()}}</td>
                        <td>{{App\Models\student_info::kristanFive()}}</td>
                    </tr>
                    <tr class="bg-success font-weight:900">
                        <td>Total Student</td>
                        <td>{{App\Models\student_info::totalStudent()}}</td>
                        <td>{{App\Models\student_info::totalMale()}}</td>
                        <td>{{App\Models\student_info::totalFemale()}}</td>
                        <td>{{App\Models\student_info::totalHindu()}}</td>
                        <td>{{App\Models\student_info::totalIslam()}}</td>
                        <td>{{App\Models\student_info::totalBuddist()}}</td>
                        <td>{{App\Models\student_info::totalKristan()}}</td>
                    </tr>
                </tbody>
            </table>


        </div>
        <div class="col-md-4 ">
            <canvas id="doughnutChart"></canvas>
            <span class="invisible" id="classFive">{{App\Models\student_info::totalStudentFive()}}</span>
            <span class="invisible" id="classFour">{{App\Models\student_info::totalStudentFour()}}</span>
            <span class="invisible" id="classThree">{{App\Models\student_info::totalStudentThree()}}</span>
            <span class="invisible" id="classTwo">{{App\Models\student_info::totalStudentTwo()}}</span>
            <span class="invisible" id="classOne">{{App\Models\student_info::totalStudentOne()}}</span>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 card card-body my-2">
            <h4 style="color:#FFC107; text-align:center; margin-top:5px; background-color:#17A2B8">Class Routine</h4>
            <div class="row mb-3 mt-2">
                <div class="col">
                    <select class="form-select">
                        <option>Select Class</option>
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                        <option>Class 4</option>
                        <option>Class 5</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select">
                        <option>Select Day</option>
                        <option>Saturday</option>
                        <option>Sunday</option>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                    </select>
                </div>
            </div>
            <table class=" table table-bordered w-100">
                <tr>
                    <th>Class No.</th>
                    <th>Time</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>7.00AM - 7.30AM</td>
                    <td>Bangla</td>
                    <td>Gobinda Chandra Das</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>7.30AM - 8.00AM</td>
                    <td>English</td>
                    <td>Gobinda Chandra Das</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>8.00AM - 8.30AM</td>
                    <td>Math</td>
                    <td>Gobinda Chandra Das</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>9.30AM - 10.00AM</td>
                    <td>Religion</td>
                    <td>Gobinda Chandra Das</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>10.00AM - 10.30AM</td>
                    <td>Science</td>
                    <td>Gobinda Chandra Das</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>11.30AM - 11.00AM</td>
                    <td>General Knowledge</td>
                    <td>Bangla 2nd Paper</td>
                </tr>
                <tr>
                    <td>07</td>
                    <td>12.00AM - 12.30AM</td>
                    <td>ICT</td>
                    <td>Gobinda Chandra Das</td>
                </tr>
            </table>
        </div>
        <div class="col-md-4 card card-body my-2">
            <h4 style="color:#FFC107; text-align:center; margin-top:5px; background-color:#17A2B8">Recent News</h4>
            <div id="accordion">
                <div class="card my-1 py-0">
                    <div class="card-header my-0 py-1 news_style" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button><i class="bi bi-chevron-down ms-auto " style="float:right; padding-top:10px"></i>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card my-0 py-1">
                    <div class="card-header my-0 py-1 news_style" id="news_1">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="news_1" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card my-0 py-1">
                    <div class="card-header my-0 py-1 news_style" id="news_2">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="news_2" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card my-0 py-1">
                    <div class="card-header my-0 py-1 news_style" id="news_3">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="news_3" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active " style="text-align: center; background-color:skyblue" data-bs-interval="10000">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis illum velit ea enim autem
                        aperiam inventore eius quo! Architecto quisquam voluptas beatae. Ipsam officiis debitis deleniti
                        odit reiciendis enim quos.
                        Eveniet blanditiis sit vel, quod recusandae in tempore necessitatibus nulla sequi nostrum,
                        molestias laboriosam doloremque nam natus rem, tempora aut possimus quidem consectetur
                        obcaecati. Harum fugiat itaque ullam fuga deleniti.
                        Illo cumque consectetur architecto, beatae accusamus est! Culpa soluta exercitationem iste in
                        quia modi dolor at dolore optio error! Totam beatae libero commodi nisi consequatur dolorum sunt
                        quo suscipit praesentium.</p>
                </div>
                <div>
                    <img src="{{ asset('developerImage/gobinda.jpg') }}" alt="" style="border-radius: 50%; width: 150px; height: 150px;">
                </div>
                <div>
                    <h3>Gobinda Chandra Das</h3>
                    <h4>Developer & Co-Founder</h4>
                </div>
            </div>
            <div class="carousel-item  " style="text-align: center; background-color:rgb(121, 233, 233)" data-bs-interval="10000">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis illum velit ea enim autem
                        aperiam inventore eius quo! Architecto quisquam voluptas beatae. Ipsam officiis debitis deleniti
                        odit reiciendis enim quos.
                        Eveniet blanditiis sit vel, quod recusandae in tempore necessitatibus nulla sequi nostrum,
                        molestias laboriosam doloremque nam natus rem, tempora aut possimus quidem consectetur
                        obcaecati. Harum fugiat itaque ullam fuga deleniti.
                        Illo cumque consectetur architecto, beatae accusamus est! Culpa soluta exercitationem iste in
                        quia modi dolor at dolore optio error! Totam beatae libero commodi nisi consequatur dolorum sunt
                        quo suscipit praesentium.</p>
                </div>
                <div>
                    <img src="{{ asset('developerImage/tonoy.jpg') }}" alt="" style="border-radius: 50%; width: 150px; height: 150px;">
                </div>
                <div>
                    <h3>Mahabub Tonoy</h3>
                    <h4>Developer & Co-Founder</h4>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>

@endsection