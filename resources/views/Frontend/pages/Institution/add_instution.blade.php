@extends('Frontend.layouts.master')
@section('title', 'Add Institute')
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

<section class="section dashboard">
    <h2 class="text-primary">Add Institution Information</h2>
    <form action="{{ route('institution_store') }}" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            @csrf
            <label for="exampleInputEmail1" class="form-label">Institution Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Institution Name" name="instution_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Institution Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="institution_address" placeholder="Write Your Institution Address">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Institution EMIS</label>
            <input type="number" class="form-control" id="institution_emis" name="institution_emis" placeholder="Write Your Institution EMIS">
        </div>
        <div class="row mb-3">
            <label for="division_id" class="form-label">{{ __('Division') }}</label>

            <div class="col-md-12">
                <select name="division_id" id="division_id" class="w-100 py-1">
                    <option value="">-- Select Your Division--</option>
                </select>

                @error('division_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="district_id" class="form-label">{{ __('District') }}</label>

            <div class="col-md-12">
                <select name="district_id" id="district-area" class="w-100 py-1">
                    <option>-- Select Your District--</option>
                </select>

                @error('district_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="district_id" class="form-label">{{ __('Upazila') }}</label>

            <div class="col-md-12">
                <select name="upazila_id" id="upazila-area" class="w-100 py-1">
                    <option>-- Select Your Upazila--</option>
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
            <input type="file" class="form-control" id="institution_logo" name="institution_logo" placeholder="Write Your Institution EMIS">
        </div>

        <button type="submit" class="btn btn-primary">Add Info</button>
    </form>
</section>
@endsection

@push('js')
<script>
    let divisionsData = [];
    $(document).ready(function() {
        let divisions = "";
        $.get("{{asset("api/division.json")}}",
            function(data) {
                divisionsData = data;
                for (let key in data) {
                    divisions += `<option value='${key}'>${data[key].en}</option>`;
                }
                $("#division_id").append(divisions);
            });
    });



    $("#division_id").change(function() {
        let division = $("#division_id").val();
        $("#district-area").html("<option>-- Select Your Upazila--</option>");
        var districts = "";
        // send an ajax request to server with this division
        for (let key in divisionsData[division].district) {
            districts += `<option value='${key}'>${divisionsData[division].district[key].en}</option>`;
        }
        $("#district-area").append(districts);
    })

    $("#district-area").change(function() {
        let division = $("#division_id").val();
        var district = $("#district-area").val();
        $("#upazila-area").html("<option>-- Select Your Upazila--</option>");
        var subdistricts = "";
        // send an ajax request to server with this division
        divisionsData[division].district[district].upazilla.forEach(element => {
            subdistricts += `<option value='${element.toLowerCase()}'>${element}</option>`;
        });
        $("#upazila-area").append(subdistricts);
    })

    // $("#upazila-area").change(function() {
    //     var upazila = $("#upazila-area").val();
    //     $("#institution-area").html("");
    //     var option = "";
    //     // send an ajax request to server with this division
    //     $.get("http://localhost/School_Management/School_Management/public/get-institution/" + upazila,
    //         function(data) {
    //             data1 = JSON.parse(data);
    //             option2 = "<option>-- Select Your Institution--</option>"
    //             data1.forEach(function(element) {
    //                 option += "<option value='" + element.name + "'>" + element.name + "</option>";
    //             })
    //             institution = option2 + option
    //             $("#institution-area").html(institution);
    //         });
    // })
</script>
@endpush