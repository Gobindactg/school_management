{{-- @extends('Frontend.layouts.master')
@section('title', 'Add Institute')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Institution Information | Noipunno Digital School</title>
    @include('Frontend.partial.css')
    <style>
        .body_img {
            background-image: url("{{ asset('sliderImage/background.png') }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    
    </style>
</head>
<body class="body_img">
@include('Frontend.partial.header')
<div class="container py-3 card card-body mt-5" style="background-color: rgb(180, 182, 255)">

<h1 class="text-center">Welcome To Noipunno Digital School</h1>
@include('Frontend.partial.message')
<section class="section dashboard">
    <h2 class="text-primary text-center">Please Add Your Institution Information</h2>

    <form action="{{ route('institution_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Institution Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Write Institution Name" name="instution_name" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Institution Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="institution_address"
                placeholder="Write Your Institution Address" required>
        </div>
        <div class="mb-3">
            <label for="institution_emis" class="form-label">Institution EMIS</label>
            <input type="number" class="form-control" id="institution_emis" name="institution_emis"
                placeholder="Write Your Institution EMIS" required>
        </div>
        <div class="row mb-3">
            <label for="division_id" class="form-label">{{ __('Division') }}</label>

            <div class="col-md-12">
                <select name="division_id" id="division_id" class="w-100 py-1" required>
                    <option value="null">-- Select Your Division--</option>
                    @foreach ($division as $division)
                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach
                </select>

                @error('division_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="district-area" class="form-label">{{ __('District') }}</label>

            <div class="col-md-12">
                <select name="district_id" id="district-area" class="w-100 py-1" required>
                </select>

                @error('district_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="upazila-area" class="form-label">{{ __('Upazila') }}</label>

            <div class="col-md-12">
                <select name="upazila_id" id="upazila-area" class="w-100 py-1" required>
                </select>

                @error('district_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="institution_logo" class="form-label">Institution Logo</label>
            <input type="file" class="form-control" id="institution_logo" name="institution_logo"
                placeholder="Write Your Institution EMIS">
        </div>

        <button type="submit" class="btn btn-primary">Submit Information</button>
    </form>
</section>
@include('Frontend.partial.js')
@include('Frontend.partial.scripts')
</div>
    
</body>
</html>
{{-- @endsection --}}