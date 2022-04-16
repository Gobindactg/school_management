@extends('Frontend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Institution</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @include('Frontend.partial.message')
    <section class="section dashboard">
        <h2 class="text-primary">Add Institution Information</h2>

        <form action="{{ route('update.institution', $institution->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Institution Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Write Institution Name" name="instution_name" value="{{ $institution->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Institution Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="institution_address"
                    placeholder="Write Your Institution Address" value="{{ $institution->address }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Institution EMIS</label>
                <input type="number" class="form-control" id="institution_emis" name="institution_emis"
                    placeholder="Write Your Institution EMIS" value="{{ $institution->emis_number }}">
            </div>
            <div class="row mb-3">
                <label for="division_id" class="form-label">{{ __('Division') }}</label>

                <div class="col-md-12">
                    <select name="division_id" id="division_id" class="w-100 py-1" >
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
                    <select name="district_id" id="district-area" class="w-100 py-1">
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
                    <select name="upazila_id" id="upazila-area" class="w-100 py-1">
                    </select>

                    @error('district_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Institution Logo</label>
                <input type="file" class="form-control" id="institution_logo" name="institution_logo"
                    placeholder="Write Your Institution EMIS">
            </div>
            <div class="row  ">
                <div class="col-md-6 card card-body ">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Institution Logo</label>
                        <div class="row py-2">
                            <div class="col-md-4">
                                <div style="padding:5px 0px">
                                    <img style="width:150px; height:150px;" id="output" />
                                </div>
                                <input type="file" class="form-control" name="institution_logo" id="institution_logo"
                                    accept="image/*" onchange="loadFile(event)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 card card-body text-center">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Old Institution Logo</label>
                        <div class="row py-2">
                            <div class="col-md-12">
                                <img style="width:150px" src="{{ asset('institutionImage/' . $institution->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Info</button>
        </form>
    </section>
@endsection
<script type="text/javascript">
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };
</script>
