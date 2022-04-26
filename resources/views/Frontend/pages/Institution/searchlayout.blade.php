@extends('Frontend.layouts.master')
@section('content')
   {{-- <div class="row">
   
        <div class="col-md-3">
            <form action="{{ route('search.result.show') }}" method="get">
                <label for="division_id" class="form-label">{{ __('Division') }}</label>
                <div class="col-md-12">
                  <select name="search" id="division_id" class="w-100 py-1">
                        <option value="">-- Select Your Division--</option>
                        @foreach ($division as $division)
                            <option value="{{$division->id}}">{{ $division->name }}</option>
                        @endforeach
                    </select>
                    @error('division_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="submit" value="Search">
           
        </form>
        </div>
        <div class=" col-md-3">
            <form action="{{ route('search.result.show') }}" method="get">
                <label for="district_id" class="form-label">{{ __('District') }}</label>

                <div class="col-md-12">
                    <select name="search" id="district-area" class="w-100 py-1">

                    </select>

                    @error('district_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              <input type="submit" value="Search">
            </form>
        </div>
        
  
   
        <div class=" col-md-3">
            <form action="{{ route('search.result.show') }}" method="get">
                <label for="district_id" class="form-label">{{ __('Upazila') }}</label>

                <div class="col-md-12">
                    <select name="search" id="upazila-area" class="w-100 py-1">

                    </select>

                    @error('district_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="submit" value="Search">
            </form>
        </div>
        <div class=" col-md-3">
            <form action="{{ route('search.result.show') }}" method="get">
                <label for="institution_id" class="form-label">{{ __('Institution') }}</label>

                <div class="col-md-12">
                    <select name="search" id="institution-area" class="w-100 py-1">

                    </select>
                    <input type="submit" value="Search">
                </div>
            </form>

        </div>
        
    </div>

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Institution</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title --> --}}
    @yield('search')
  
@endsection

