@extends('Fontend.Pages.Institution.searchlayout')
@section('search')
    <section class="section dashboard">
        <div class="py-2">
           
            <h3 class="text-info">Search Result By <span class="text-success"> {{$search}} </span></h3>
         
        </div>
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
                        <a href="{{ route('edit.institution', $institution->id) }}" class="btn btn-primary">Go</a>

                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
