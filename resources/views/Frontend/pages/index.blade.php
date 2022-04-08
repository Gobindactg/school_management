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
            <div class="col-md-4">
               
            </div>
            <div class="col-md-4">
                <canvas id="doughnutChart"></canvas>
            </div>
            <div class="col-md-4">
            
            </div>
        </div>
     
                    
        </section>
   
@endsection
