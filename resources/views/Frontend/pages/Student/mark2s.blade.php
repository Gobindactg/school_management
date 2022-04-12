@extends('Frontend.layouts.master')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
 
@section('title', 'Marks')
@section('content')
{{-- @extends('Frontend.Pages.Institution.searchlayout')

@section('search') --}}
<table class="table table-bordered" >
    <thead>
        <tr>
            <th  >Roll</th>
            <th  >Name</th>
            <th >Class</th>
            <th >Group</th>
            <th >Bangla</th>
            <th >English</th>
            <th >Math</th>
            <th >Science</th>
            <th >BOB</th>
            <th >Religion</th>
            <th >Music</th>
            <th >Expressive</th>
            <th >Physical</th>
        </tr>
    </thead>
</table>
{{-- 
 <table id="example" class=" table table-borderd " style="width: 100%" >
    <thead>
        <tr style="font-weight: 900;" class="text-primary">
            <th style="width:10px" >Roll</th>
            <th  style="width:10px">Name</th>
            <th style="width:10px">Class</th>
            <th style="width:10px">Group</th>
            <th style="width:10px">Bangla</th>
            <th style="width:10px">English</th>
            <th style="width:10px">Math</th>
            <th style="width:10px">Science</th>
            <th style="width:10px">BOB</th>
            <th style="width:10px">Religion</th>
            <th style="width:10px">Music</th>
            <th style="width:10px">Expressive</th>
            <th style="width:10px">Physical</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marks as $marks)
        <tr>
            <td style="width:10px" >{{ $marks->st_roll }}</td>
            <td style="width:10px">{{ $marks->name }}</td>
            <td style="width:10px">{{ $marks->class }}</td>
            <td style="width:10px">{{ $marks->st_group }}</td>
            <td style="width:10px">{{ $marks->bangla }}</td>
            <td style="width:10px">{{ $marks->english}}</td>
            <td style="width:10px">{{ $marks->math }}</td>
            <td style="width:10px">{{ $marks->science }}</td>
            <td style="width:10px">{{ $marks->bob }}</td>
            <td style="width:10px">{{ $marks->religion }}</td>
            <td style="width:10px">{{ $marks->music }}</td>
            <td style="width:10px">{{ $marks->expressive_art }}</td>
            <td style="width:10px">{{ $marks->physical }}</td>
            
        </tr>
        @endforeach
    </tbody>
 
</table> 
  --}}
 @endsection

@include('Frontend/partial/js')
<script>

    // using data table
    $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
 
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
 
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});

</script> 
