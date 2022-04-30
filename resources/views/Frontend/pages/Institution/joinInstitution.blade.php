<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Get Started | Noipunno Digital School</title>
    @include('Frontend.partial.css')
    <style>
        .body_img {
            background-image: url("{{ asset('sliderImage/background.png') }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

    </style>
</head>

<body class="body_img">
    @include('Frontend.partial.header')
    <div class="container py-3 card card-body mt-5" style="background-color: rgb(180, 182, 255); max-width: 800px;">

        <h1 class="text-center">Welcome To Noipunno Digital School</h1>
        @include('Frontend.partial.message')
        <section class="section dashboard">
            <hr />
            <label for="institution_name" class="form-label mt-3">Find Institution</label>
            <div class="input-group">
                <input type="text" name="school_query" id="institution_name"
                    placeholder="Example: Dhaka College, Govt Bangla College etc." class="form-control " />
                <button class="btn btn-primary" onclick="searchInstitution()" type="button"><i
                        class='bx bx-search-alt'></i> Find</button>
            </div>
        </section>
        <div id="institution_results"></div>
        <div class="mt-4 d-none" id="institution_form">
            <h2 class="m-0">Joining Form</h2>
            <hr />
            <img id="form_institution_image" alt="shksc"
                style="width: 150px; max-height: 150px; float: right;" />
            <p class="fs-3" id="form_institution_name"></p>
            <p>EMIS: <span id="form_institution_emis"></span></p>
            <p>Address: <span id="form_institution_address"></span></p>
            <div style="clear:both"></div>
            <form method="POST" action="{{route('apply_job')}}">
                @csrf
                <input type="hidden" name="institution_id" id="institution_id" />
                <label for="role">Role: </label>
                <select id="role" name="role" class="form-control" required>
                    <option value="">Select Role:</option>
                    <option value="teacher">Teacher</option>
                    <option value="accountant">Accountant</option>
                    <option value="librarian">Librarian</option>
                    <option value="transportation_administrative">Transportation Administrative</option>
                </select>
                <hr />
                <h3>Personal Information:</h3>
                <p>Name: <strong>{{$user->name}}</strong></p>
                <p>Email: <strong>{{$user->email}}</strong></p>
                <button class="btn btn-success mt-3" type="submit">Apply</button>
            </form>
            <p class="text-sm mt-3">By clicking "Apply", you agree to the terms and conditions.</p>
        </div>
    </div>

    @include('Frontend.partial.js')
    @include('Frontend.partial.scripts')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function searchInstitution() {

            let school_query = $("#institution_name").val();

            if (school_query !== "") {
                $("#institution_results").html("<p class='text-center mt-3'>Searching...</p>");
                $.ajax({
                    url: "{{ route('institution_list') }}",
                    type: 'post',
                    data: {
                        school_query
                    },

                    success: function(success_message) {
                        let schools = '';
                        success_message.forEach(school => {
                            schools += `<tr>
                                    <td><img src='{{ asset('institutionImage') }}/${school.image}' style="width: 50px; max-height: 50px" alt=''></td>
                                    <td>
                                        <b>${school.name}</b><br/>
                                        Address: ${school.address},
                                        EMIS: ${school.emis_number}
                                    </td>
                                    <td>
                                        <button 
                                            class='btn btn-primary float-right' 
                                            onclick="apply_institution(${school.id}, '${school.name}', '${school.address}', ${school.emis_number}, '${school.image}')"
                                        >Apply</button>
                                    </td>
                                </tr>`;
                        });
                        $("#institution_results").html(`
                            <table class="table mt-3">
                                ${schools}
                            </table>
                        `);
                    },
                    error: function(xhr, ajaxOptions, error_message) {
                        $("#institution_results").html(`
                            <p class='text-center text-danger'>Failed To Load, Please Try again.</p>
                        `);
                    }
                });
            }
        }

        function apply_institution(id, name, address, emis, image) {
            $("#institution_form").removeClass("d-none");
            $('html, body').animate({
                scrollTop: $("#institution_form").offset().top
            }, 1000);

            $("#institution_id").val(id);
            $("#form_institution_name").text(name);
            $("#form_institution_address").text(address);
            $("#form_institution_emis").text(emis);
            $("#form_institution_image").attr('src', `{{asset('institutionImage')}}/${image}`);
            $("#form_institution_image").attr('alt', name);

        }
    </script>

</body>

</html>
