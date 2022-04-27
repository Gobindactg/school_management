@extends('Frontend.layouts.master')
@section('title', 'Manage Categories')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@push('css')
    <link rel='stylesheet' href="{{ asset('Frontend/resources/css/library.css') }}" type="text/css" />
    <style>
        .book_action {
            padding: 0 !important;
        }

        .book_action a {
            padding: 0.3rem;
            cursor: pointer;
            display: block;
            height: 100%;
            width: 100%;
            text-align: center;
            transition: all 0.1s linear;
        }

        .book_action a:hover {
            background: rgba(200, 200, 200, 0.3)
        }

    </style>
@endpush

@section('content')
    <div class="pagetitle">
        <h1 class='mb-4'>Manage Book Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('noipunno') }}">Library</a></li>
                <li class="breadcrumb-item active">Manage Book Categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="mt-3 book_category_list">
        <h3>Categories</h3>
        <hr />


        @if (count($categories) !== 0)
            <table class="table table-striped bg-light table-sm">
                <tr class="bg-dark">
                    <th class="text-white">Category Name</th>
                    <th class="text-white">Category Slug</th>
                    <th class="text-white">Total Books</th>
                    <th class="text-white text-center">Actions</th>
                </tr>
                @foreach ($categories as $category)
                    <tr data-category-id="{{ $category->id }}">
                        <td class="px-3">{{ $category->category }}</td>
                        <td>{{ $category->category_slug }}</td>
                        <td>0</td>
                        <td class="book_action">
                            <a href="#" onclick="removeCategory({{ $category->id }})" title="Delete Category"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <table class="table table-striped bg-light table-sm">
                <tr class="bg-dark">
                    <th class="text-white text-center">No Categories Has Been Added Yet</th>
                </tr>
            </table>
        @endif
    </div>
    <div class="mt-3 ">
        <h3>Add Categories</h3>
        <hr />
        <form method="POST" action="{{ route('library_store_category') }}">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6 pl-md-0">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name"
                        placeholder="Novel, Technology ect">
                </div>

                <div class="mb-3 col-md-6 pr-md-0">
                    <label for="category_slug" class="form-label">Category slug</label>
                    <input type="text" class="form-control" pattern="[a-zA-Z0-9_-]+" id="category_slug"
                        name="category_slug" placeholder="only alphabets, numbers, - and _ allowed">
                </div>
                <button type="submit" class="btn btn-primary col-md-12"><i class='bx bxs-book-add'></i> Add New
                    Category</button>
            </div>

        </form>
    </div>
@endsection
@push('js')
    <script>
        $("#category_name").on('keyup keypress blur change', () => {
            let cat = $("#category_name").val();
            let cat_slug = cat
                .toLowerCase()
                .replace(/[^\w\s]/gi, '')
                .replaceAll(" ", "-");

            $("#category_slug").val(cat_slug);
        });

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif


        function removeCategory(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('library_delete_category') }}",
                type: 'post',
                data: {
                    id
                },
                success: function(success_message) {
                    $(`[data-category-id='${id}']`).slideUp();
                    toastr.success(success_message);
                },
                error: function(xhr, ajaxOptions, error_message) {
                    toastr.error('Failed To Delete Category');
                    console.log(error_message);
                }
            });
        }
    </script>
@endpush
