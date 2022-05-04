@extends('Frontend.layouts.master')
@section('title', 'Manage Teachers')
@section('content')
    <div class="pagetitle">
        <h1>Manage Teachers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('noipunno')}}">Manage Teachers</a></li>
                <li class="breadcrumb-item active">Manage Teachers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <h2 class="text-primary ">Manage Teachers</h2>
        @if (count($teachers) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Teacher Name</th>
                    <th>Teacher Title</th>
                    <th>Teacher Education</th>
                    <th>Teacher Subject</th>
                    <th>Teacher Address</th>
                    <th>Action</th>
                </tr>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>1</td>
                        <td>{{ $teacher->name }}</td>
                        <td class="text-capitalize">{{ $teacher->post }}</td>
                        <td>{{ $teacher->edu_qualifications }}</td>
                        <td>{{ $teacher->subject }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>
                            <form method="POST" action="{{route('removeTeacher')}}">
                                @csrf
                                <input type="hidden" value="{{ $teacher->id }}" name="user_id"/>
                                <button type="submit" class="btn btn-danger"><i class='bx bxs-trash'></i></button>
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
