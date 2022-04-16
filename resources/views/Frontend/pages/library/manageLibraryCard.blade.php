@extends('Frontend.layouts.master')
@section('title', "Add Book To The Library")

@section('content')
<div class="pagetitle">
  <h1 class='mb-4'>Manage Library Cards</h1>
  <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('library')}}">Library</a></li>
          <li class="breadcrumb-item active">Manage Library Cards</li>
      </ol>
  </nav>
</div><!-- End Page Title -->
<div class="row">

</div>
@endsection

@push('css')
<link rel='stylesheet' href="{{asset('Frontend/resources/css/library.css')}}" type="text/css" />
@endpush