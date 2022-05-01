@extends('Frontend.layouts.master')
@section('title', 'Manage Subjects')
@section('content')
<div class="pagetitle">
    <h1>Manage Subjects</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('addSubject')}}">Subject Management</a></li>
            <li class="breadcrumb-item active">Manage Subjects</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

    <section class="section dashboard">
        <h2 class="text-primary ">Manage Subjects</h2>
        <table class="table table-striped table-sm bg-white">
            <tr class="bg-dark">
                <th class="text-white">ID</th>
                <th class="text-white">Subject Name</th>
                <th class="text-white">Subject Class</th>
                <th class="text-white">Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bangla</td>
                <td>Five</td>
                <td>
                    <a href="#" class="text-dark px-2">
                        <i class='bx bxs-edit-alt fs-5'></i>
                    </a>
                    <a href="#" class="text-dark">
                        <i class='bx bxs-trash fs-5' ></i>
                    </a>
                </td>
            </tr>
            
            <tr>
                <td>1</td>
                <td>Bangla</td>
                <td>Five</td>
                <td>
                    <a href="#" class="text-dark px-2">
                        <i class='bx bxs-edit-alt fs-5'></i>
                    </a>
                    <a href="#" class="text-dark">
                        <i class='bx bxs-trash fs-5' ></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Bangla</td>
                <td>Five</td>
                <td>
                    <a href="#" class="text-dark px-2">
                        <i class='bx bxs-edit-alt fs-5'></i>
                    </a>
                    <a href="#" class="text-dark">
                        <i class='bx bxs-trash fs-5' ></i>
                    </a>
                </td>
            </tr>

        </table>
    </section>
@endsection
