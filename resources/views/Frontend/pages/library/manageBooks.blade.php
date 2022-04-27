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
    <a href="#" type="button" class="btn btn-primary mb-3"><i style="font-size: 20px" class='bx bx-plus'></i>Add New Book</a>
    <div class="scrollbar-thin scrollbar-x">
        <table class="table table-striped table-sm bg-light">
            <tr class="bg-dark">
                <th class="text-white">Book ID</th>
                <th class="text-white">Book Name</th>
                <th class="text-white">Book Author</th>
                <th class="text-white">Book Category</th>
                <th class="text-white">Quantity</th>
                <th class="text-white text-center">Actions</th>
            </tr>
            <tr>
                <td>1</td>
                <td>অগ্নিবীণা</td>
                <td>কাজী নজরুল ইসলাম</td>
                <td>কাব্যগ্রন্থ</td>
                <td>10</td>
                <td class="book_action">
                    <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" title="Delete Book"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>শিউলিমালা</td>
                <td>কাজী নজরুল ইসলাম</td>
                <td>কাব্যগ্রন্থ</td>
                <td>7</td>
                <td class="book_action">
                    <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" title="Delete Book"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>মৃত্যুক্ষুধা</td>
                <td>কাজী নজরুল ইসলাম</td>
                <td>কাব্যগ্রন্থ</td>
                <td>9</td>
                <td class="book_action">
                    <a href="#" title="Edit Book"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" title="Delete Book"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </table>
    </div>
@endsection