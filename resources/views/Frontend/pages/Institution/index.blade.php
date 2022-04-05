@extends('Frontend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
          <h2 class="text-primary text-center"><strong>WELCOME SHAHEBDINOGOR GOVT. PRIMARY SCHOOL</strong></h2>
          <h4 class="text-center "><strong> Aburhat, Jorargonj, Mirsarai, Chattogram  </strong></h4>
          <hr>
          <img src="{{asset('Global/images/School-Management.jpg')}}" alt="" style="height: 350px">
        </div>
    </section>
@endsection
