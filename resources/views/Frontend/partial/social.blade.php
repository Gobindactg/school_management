@extends('Frontend.layouts.master')
@section('title', 'Add Social Media')
@section('content')
<div class="pagetitle">
    <h1>Add Social Media</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Institution</a></li>
            <li class="breadcrumb-item active">Add Social Media</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
    <h2 class="text-primary">Add Social Media Link</h2>
    @include('Frontend.partial.message')
    <form action="{{ route('add_social_media') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Add Social Media</label>
            <select name="social_media" id="social_media" class="form-select" aria-label="Default select example">
                <option value="">-- Please Select Your Social Media --</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">Linkedin</option>
                <option value="youtube">Youtube</option>
                <option value="globe">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Add Social Media Link</label>
            <input type="text" class="form-control" id="social_media_link" aria-describedby="emailHelp"
            placeholder="Pleace Enter Your Social Media Link" name="social_media_link">
           
        </div>

        <button type="submit" class="btn btn-primary btn-lg">Add Social Media</button>
    </form>
</section>
@endsection