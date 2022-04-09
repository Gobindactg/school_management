@extends('Frontend.layouts.master')

@section('content')
      
        <section class="section dashboard">
            <div class="row">
                <div class="col-md-12">
                    @guest
                    @if (Route::has('login'))
                    <h2 class="text-primary text-center" style=" text-transform: uppercase"><strong>
                        WELCOME NOIPUNNO DIGITAL SCHOL</strong></h2>
                   @endif
                    @if (Route::has('login'))
                    <h4 class="text-center " style=" text-transform: uppercase"><strong>
                        ABURHAT, JORARGONJ, MIRSARAI, CHATTOGRAM</strong></h4>
                   @endif
                   @else
                    @foreach ($institution as $institution)
                    <h2 class="text-primary text-center" style=" text-transform: uppercase"><strong>
                    {{ $institution->name }}</strong></h2>
                    <h4 class="text-center " style=" text-transform: uppercase"><strong>
                            {{ $institution->address }}</strong></h4>

                    <p class="text-center " style=" text-transform: uppercase"><strong>
                            {{ $institution->upazila->name }} , {{ $institution->district->name }} , {{ $institution->division->name }} </strong></p>
                    <h4 class="text-center " style=" text-transform: uppercase"><strong> EMIS :
                            {{ $institution->emis_number }}</strong></h4>
                           
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('institutionImage/' . $institution->image) }}" class="card-img-top "
                alt="{{ $institution->name }}" style="width:55%;">
                </div>
                @endforeach
                @endguest
            </div>
            <hr>
            <img src="{{ asset('Global/images/School-Management.jpg') }}" alt="" style="height: 350px; width:100%">
            <div class="row mb-4">
             <div class="col-lg-3 col-6">
                <div class="small-box" style='background-color: #17a2b8 !important'>
                <div class="inner text-center text-light">
                    <span class="badge badge-warning" style="font-size:30px">152</span>
                    <p>Total User</p>
                </div>
                <div class="icon">
                    <i class='bx bx-book-alt'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
                </div>
            </div>
             <div class="col-lg-3 col-6">
                <div class="small-box " style='background-color: #17a2b8 !important' >
                <div class="inner text-center text-light">
                  <span class="badge badge-warning" style="font-size:30px">48</span>
                    <p>Total School</p>
                </div>
                <div class="icon">
                    <i class='bx bx-man-alt'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
                </div>
            </div>
             <div class="col-lg-3 col-6">
                <div class="small-box "  style='background-color: #17a2b8 !important'>
                <div class="inner text-center text-light">
                    <span class="badge badge-warning" style="font-size:30px">4448</span>
                    <p>Total Student</p>
                </div>
                <div class="icon">
                    <i class='bx bx-book-alt'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
                </div>
            </div>
             <div class="col-lg-3 col-6">
                <div class="small-box "  style='background-color: #17a2b8 !important'>
                <div class="inner text-center text-light">
                   <span class="badge badge-success" style="font-size:30px">48</span>
                    <p>Now Active</p>
                </div>
                <div class="icon">
                    <i class='bx bx-book-alt'></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class='bx bxs-right-arrow-circle'></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
               <canvas id="lineChart"></canvas>
            </div>
            <div class="col-md-4">
                <canvas id="doughnutChart"></canvas>
            </div>
           
        </div> 
        <div class="row">
            <div class="col-md-8 card card-body my-2">
                <h4 style="color:#FFC107; text-align:center; margin-top:5px; background-color:#17A2B8">Recently Add School With Category</h4>
                <table class=" table table-bordered w-100" >
                    <tr>
                        <th>SL</th>
                        <th>School Name</th>
                        <th>Category</th>
                        <th>Upazila</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>ABURHAT GPS</td>
                        <td>Primary</td>
                        <td>MIRSARAI</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>ABURHAT GPS</td>
                        <td>Primary</td>
                        <td>MIRSARAI</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>ABURHAT GPS</td>
                        <td>Primary</td>
                        <td>MIRSARAI</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>ABURHAT GPS</td>
                        <td>Primary</td>
                        <td>MIRSARAI</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>ABURHAT GPS</td>
                        <td>Primary</td>
                        <td>MIRSARAI</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 card card-body my-2">
                <h4 style="color:#FFC107; text-align:center; margin-top:5px; background-color:#17A2B8">Recently News</h4>
            <div id="accordion">
                <div class="card my-1 py-0">
                    <div class="card-header my-0 py-1 news_style"  id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                        </button><i
                    class="bi bi-chevron-down ms-auto " style="float:right; padding-top:10px"></i>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>

                <div class="card my-0 py-1">
                    <div class="card-header my-0 py-1 news_style"  id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                <div class="card my-0 py-1">
                    <div class="card-header my-0 py-1 news_style"  id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                <div class="card my-0 py-1">
                    <div class="card-header my-0 py-1 news_style"  id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
           <div class="row ">
               <h2 class="Developer">Developer And Co-Founder</h2>
               
                <div class="col-md-6 position_dev center">
                        <img src="{{asset('developerImage/gobinda.jpg')}}" alt="" >
                        <h3>Gobinda Chandra Das</h3>
                        <h4>Developer & Co-Founder</h4>
                </div>
                <div class="col-md-6 position_dev ">
                         <img src="{{asset('developerImage/gobinda.jpg')}}" alt="" >
                        <h3>Mahabub Tonoy</h3>
                        <h4>Developer & Co-Founder</h4>
                </div>
               
            </div>
    </section>
@endsection