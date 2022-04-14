@extends('Frontend.layouts.master')
@section('title', 'Marks')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

    <div class="container" style="padding: 0; margin:0;">
        <div class="row bg-info" style="margin-bottom: 15px">
            <div class="col-md-4 ">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Class</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Section</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Year</option>
                    <option value="1">2022</option>
                    <option value="2">2021</option>
                    <option value="3">2020</option>
                </select>
            </div>

        </div>
        <div class="container scrollbar-thin" style="width: 100%; overflow-x: scroll;">
            <table class="table table-bordered">

                <thead class="thead-dark">
                    <tr class="show">
                        <th>Roll</th>
                        <th><span style="display: inline-block; width: 200px;">Name</span></th>
                        <th>Class</th>
                        <th>Group</th>
                        <th>Year</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>BOB</th>
                        <th>Religion</th>
                        <th>Music</th>
                        <th>Expressive</th>
                        <th>Physical</th>
                    </tr>
                </thead>
              
                <tbody class="thead-light">
                    @foreach ($marks as $mark)
                        <tr class="toutput text-center table-info">
                            <td>
                                <div  onBlur="updateValue(this,'st_roll','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->st_roll }}</div>
                            </td>
                            <td class="text-left">
                                <div onBlur="updateValue(this,'name','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->name }}</div>
                            </td>
                            <td>
                                <div  onBlur="updateValue(this,'class','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->class }}</div>
                            </td>
                            <td>
                                <div  onBlur="updateValue(this,'st_group','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->st_group }}</div>
                            </td>
                            <td>
                                <div  onBlur="updateValue(this,'st_year','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->st_year }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'bangla','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->bangla }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'english','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->english }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'math','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->math }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'science','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->science }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'bob','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->bob }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'religion','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->religion }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'music','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->music }}</div>
                            </td>
                            <td>
                                <div contenteditable="true"
                                    onBlur="updateValue(this,'expressive_art','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->expressive_art }}</div>
                            </td>
                            <td>
                                <div contenteditable="true" onBlur="updateValue(this,'physical','{{ $mark->id }}')"
                                    onClick="activate(this)">{{ $mark->physical }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           
            </table>

        </div>

        <script>
            function activate(element) {
                //   alert('element');
            }

            function updateValue(element, column, id) {
                var value = element.innerText
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route('marks_store') }}',
                    type: 'post',
                    data: {
                        value,
                        column,
                        id
                    },
                    success: function(success_message) {
                        toastr.success(success_message);
                    },
                    error: function(xhr, ajaxOptions, error_message) {
                        toastr.error('Please Insert Correct Information');
                    }
                })
            }
        </script>
    @endsection
