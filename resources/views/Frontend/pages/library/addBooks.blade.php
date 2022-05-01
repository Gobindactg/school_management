@extends('Frontend.layouts.master')
@section('title', 'Add Book To The Library')

@section('content')
    <div class="pagetitle">
        <h1 class='mb-4'>Add New Book</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Library</a></li>
                <li class="breadcrumb-item active">Add New Book</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div>
        <form action="{{ route('store_book') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="book_name" class="form-label">Book Name</label>
                        <input type="text" class="form-control" id="book_name" name="book_name"
                            placeholder="অগ্নিবীণা, বাঁধন হারা ect">
                    </div>
                    <div class="mb-3">
                        <label for="book_author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="book_author" name="book_author"
                            placeholder="কাজী নজরুল ইসলাম">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="book_quantity" class="form-label">Quantity</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="book_quantity" name="book_quantity" min='1'
                            placeholder='1' value='1'>
                        <span class="input-group-text" id="basic-addon2">Unit</span>
                    </div>
                    <div class="mb-3">
                        <label for="book_category" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="book_category">
                            <option selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class='bx bxs-book-add'></i> Add New Book</button>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
@endpush
