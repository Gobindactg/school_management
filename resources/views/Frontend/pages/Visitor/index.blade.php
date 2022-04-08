@extends('Frontend.layouts.visitorMaster')

@section('content')
    <div class="card card-body  my-2"  style="padding-top: 100px; height:98%">
        @foreach ($institution as $institution)
            <h2 class="text-center text-success" style="font-family: tahoma; font-style:italic; padding-top:10px">Welcome To
                {{ $institution->name }}</h2>
            <h5 class="text-center">{{ $institution->address }}</h5>
            <h5 class="text-center">EMIS : {{ $institution->emis_number }}</h5>
            <h5 class="text-center">{{ $institution->upazila->name }} , {{ $institution->district->name }} ,
                {{ $institution->division->name }}</h5>
        @endforeach
    </div>
@endsection
