@extends('Frontend.layouts.master')
@section('title', 'User Dashboard')
@section('content')
<div class="container ">
    <div class="row ">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center text-info "> WELCOME <br> <span style="font-family:tahoma; font-style:italic; color:#fb4d01">{{Auth::user()->name}}</span></h4>
                </div>
                <div class="card-body">
                    @php
                    $users_id = Auth::user()->id;
                    $users_avatar = Auth::user()->image;
                    @endphp
                    @php
                    if($users_avatar == NULL){
                    @endphp
                    <a href="#" title="Change Image"><img src="{{asset('Frontend/UserImage/default.png')}}" class="image rounded-circle" style="width:150px"></a>
                    @php
                    }else{
                    @endphp
                    <a href="#" title="Change Image"><img src="{{asset('Frontend/UserImage/'. Auth::user()->image)}}" class="image rounded-circle" style="width:150px"></a>
                    @php
                    }
                    @endphp<br>

                </div>
                <div class="card-footer text-muted">
                    <ul class="list-group dashboard_hover">
                        <li class="list-group-item {{Route::is('userdashboard') ? 'active' : ''}}"><a href="#">Dashboard</a></li>
                        <li class="list-group-item {{Route::is('userdashboard/profile') ? 'active' : ''}}"><a href="#">Profile Update</a></li>
                        <li class="list-group-item {{Route::is('userdashboard/image') ? 'active' : ''}}"><a href="#">Profile Image Update</a></li>
                        <li class="btn btn-outline-danger my-1">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <li class="list-group-item social_hover" style="font-size:25px">
                            <a href="#" class="fa fa-facebook px-2"></a>
                            <a href="#" class="fa fa-instagram px-2"></a>
                            <a href="#" class="fa fa-twitter px-2"></a>
                            <a href="#" class="fa fa-whatsapp px-2"></a>
                            <a href="#" class="fa fa-linkedin px-2"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" style="height: 94.7%;">
                <div class="card-body pt-4">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{Auth::user()->name}}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email (Not Changeable)') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="" value="{{Auth::user()->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="" value="@if(Auth::user()->phone_number == NULL)Phone Number Not Added
                                @else{{Auth::user()->phone_number}} @endif" required autocomplete="text">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New_Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>

                            <div class="col-md-6">
                                @if(Auth::user()->image)

                                <img src="{{asset('Frontend/UserImage/'. Auth::user()->image)}}" alt="" style="width: 130px; border-radius:50%">
                                <span class="badge">{{Auth::user()->name}}</span>
                                @else
                                <img src="{{asset('Frontend/UserImage/default.png')}}" alt="" style="width: 130px; border-radius:60%">
                                <span class="badge">{{Auth::user()->name}}</span>
                                @endif
                                <div class=" pt-1">
                                    <input type="file" title="Upload Profile Picture">
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


            @section('scripts')
            <script>
                $("#division_id").change(function() {
                    var division = $("#division_id").val();
                    alert(division);
                })
            </script>
            @endsection
        </div>
    </div>
    @endsection