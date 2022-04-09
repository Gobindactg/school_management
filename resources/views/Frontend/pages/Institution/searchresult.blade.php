@extends('Frontend.pages.Institution.searchlayout')
@section('title', 'Search School')
@section('search')
    <section class="section dashboard">
        <h2 class="text-primary">Manage Institution Information</h2>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Institution Name</th>
                <th>Institution Address</th>
                <th> Upazila</th>
                <th> District</th>
                <th>Division</th>
                <th>Action</th>
            </tr>
            @foreach ($institution as $institution)
                <tr>
                    <td>#</td>
                    <td>{{ $institution->name }}</td>
                    <td>{{ $institution->address }}</td>
                    <td>{{ $institution->upazila->name }}</td>
                    <td>{{ $institution->district->name }}</td>
                    <td>{{ $institution->division->name }}</td>
                    <td>
                        <a href="{{ route('visitor', $institution->emis_number) }}" class="btn btn-primary" target="_blank" >Go</a>

                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
