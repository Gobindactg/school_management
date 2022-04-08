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
            <img src="{{ asset('images/School-Management.jpg') }}" alt="" style="height: 350px; width:100%">
        </section>
   
@endsection
