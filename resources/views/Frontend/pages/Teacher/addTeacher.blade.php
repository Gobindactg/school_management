@extends('Frontend.layouts.master')
@section('title', 'Add Teacher')
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
        <h2 class="text-primary ">Add New Teacher</h2>
        @if (count($teachers) > 0)
            <table class="table table-sm bg-white">
                <tr class="bg-dark">
                    <td class="text-white" style="width: 60px;">Image</td>
                    <td class="text-white">Name</td>
                    <td class="text-white">Educational Qualifications</td>
                    <td class="text-white">Subject</td>
                    <td class="text-white">Address</td>
                    <td class="text-white text-center">Action</td>
                </tr>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>
                            <img src="{{ asset('Frontend/UserImage/' . $teacher->image) }}"
                                style="width: 50px; max-height: 50px;" />
                        </td>
                        <td>
                            {{ $teacher->name }}<br/>
                            <span class="text-sm text-secondary">( {{ $teacher->email }} )</span>
                        </td>
                        <td>{{ $teacher->edu_qualifications }}</td>
                        <td>{{ $teacher->subject }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td class="text-center">
                            <form method="POST" action="{{ route('approveTeacher') }}" class="d-inline-block">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $teacher->id }}" />
                                <button class="mx-1 btn btn-success text-white fs-3 py-0" title="Approve">
                                    <i class='bx bxs-user-plus'></i>
                                </button>
                            </form>
                            <form method="POST" action="{{ route('removeTeacher') }}" class="d-inline-block">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $teacher->id }}" />
                                <button class="mx-1 btn btn-danger text-white fs-3 py-0" title="Delete">
                                    <i class='bx bxs-trash'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <p class="fs-3 text-center">Nothing To display</p>
        @endif
        {{-- <form action="#" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-primary">Teacher Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Write Teacher Name" name="teacher_name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-primary">Teacher Title</label>
                <select name="teacher_title" id="" class="form-control">
                    <option value="">-- Select Teacher Title --</option>
                    <option value="head_teacher"> Head Teacher </option>
                    <option value="assistant_head_teacher">Assistant Head Teacher</option>
                    <option value="assistant_teacher"> Assistant Teacher</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-primary">Teacher Education</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="teacher_education"
                    placeholder="Write Teacher Education">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-primary">Teacher Subject</label>
                <input type="number" class="form-control" id="institution_emis" name="teacher_subject"
                    placeholder="Write Teacher Subject">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-primary">Teacher Address</label>

                <textarea cols="30" rows="6" class="form-control" name="teacher_address"
                    placeholder="Write Teacher Address"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Info</button>
        </form> --}}
    </section>
@endsection
@push('js')
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('success_deleted'))
            toastr.error("{{ Session::get('success_deleted') }}");
        @endif
    </script>
@endpush
