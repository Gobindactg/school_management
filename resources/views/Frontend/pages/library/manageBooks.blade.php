@extends('Frontend.layouts.master')
@section('title', 'Manage Books')

@push('css')
    <link rel='stylesheet' href="{{ asset('Frontend/resources/css/library.css') }}" type="text/css" />
@endpush

@section('content')
    <div class="pagetitle">
        <h1 class='mb-4'>Manage Books</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Library</a></li>
                <li class="breadcrumb-item active">Manage Books</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <a href="{{route('add_book')}}" type="button" class="btn btn-primary mb-3"><i style="font-size: 20px" class='bx bx-plus'></i>Add New Book</a>
    <div class="scrollbar-thin scrollbar-x">
        <table class="table table-striped table-sm bg-light">
            @if (count($books) > 0)
                <tr class="bg-dark">
                    <th class="text-white">Book ID</th>
                    <th class="text-white">Book Name</th>
                    <th class="text-white">Book Author</th>
                    <th class="text-white">Book Category</th>
                    <th class="text-white">Quantity</th>
                    <th class="text-white text-center">Actions</th>
                </tr>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->book_name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>কাব্যগ্রন্থ</td>
                        <td>{{ $book->quantity }}</td>
                        <td class="book_action">
                            <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
                            <a href="#" title="Delete Book"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            @else
            <p style="padding: 0.3rem" class="bg-dark text-white text-center">No Book Added into Library</p>
            @endif
        </table>
    </div>
@endsection
