@extends('Frontend.layouts.master')
@section('title', 'All Subjects')
@section('content')
<div class="pagetitle">
    <h1>All Subjects</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('addSubject')}}">Subject Management</a></li>
            <li class="breadcrumb-item active">All Subjects</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

    <section class="section dashboard">
        <h2 class="text-primary ">All Subjects</h2>
        @if(count($subjects) > 0)
        <table class="table table-striped table-sm bg-white">
            <tr class="bg-dark">
                <th class="text-white">ID</th>
                <th class="text-white">Subject Name</th>
                <th class="text-white">Subject Class</th>
                <th class="text-white">Action</th>
            </tr>
            @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->subject_name}}</td>
                <td>{{$subject->class}}</td>
                <td>
                    <form method="POST" action="{{route('deleteSubject')}}">
                        @csrf
                        <input type="hidden" value="{{$subject->id}}" name="subject_id" />
                        <button type="submit" class="text-dark bg-transparent border-0" title="Delete Subject">
                            <i class='bx bxs-trash fs-5' ></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
        @else
            <p class="fs-3 text-center">Nothing To Show</p>
        @endif
    </section>
@endsection
