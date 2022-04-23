@extends('Frontend.layouts.auth')
@section('title', 'Register To Noipunno')
@push('css')
    <style>
        .d-inline-flex {
            width: 100%;
            border: 3px dashed #aaa;
            border-radius: 10px;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .d-inline-flex input {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        #image_container {
            display: inline-block;
            text-align: center;
            color: #aaa;
            cursor: pointer;
            padding: 30px;
        }

        .dragHover {
          border: 3px solid green;
        }

        .dragHover i{
          color: green;
        }

    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registered') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Institution Category') }}</label>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option value="">-- Select Your Institution Category--</option>
                                        <option value="1">Primary</option>
                                        <option value="2">Secondary</option>
                                        <option value="3">Madrasha</option>
                                        <option value="4">College</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row md-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Profile Image (optional)') }}</label>
                                <div class="col-md-6">
                                    <div id="drag_area" class="d-inline-flex my-2 mx-auto" style="padding:5px 5px">
                                        <span id="image_container" class="text-bold"><i
                                                class="fa fa-cloud-upload d-block display-3"></i>Click or Drag Image To
                                            Upload</span>
                                        <input type="file" class="form-control opacity-0" name="user_image" id="user_image"
                                            accept="image/*" onchange="loadFile(event)">
                                    </div>
                                </div>

                                <div class="row mb-0 py-2">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                        <div class="mt-3">
                                            @if (Route::has('login'))
                                                Already Have an Account? <a class="m-0 p-0"
                                                    href="{{ route('login') }}">
                                                    {{ __('Log In') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        var loadFile = function(event) {
            document.getElementById('image_container').innerHTML =
                "<img style='width:150px; height:150px; text-align:center' id='output' />";
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src);
            }
        };

        $("#user_image").on('dragover', function(e) {
          $("#drag_area").addClass('dragHover');
        });
        $("#user_image").on('dragleave', function(e) {
          $("#drag_area").removeClass('dragHover');
        });
    </script>
@endpush
