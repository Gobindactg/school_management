@extends('Frontend.pages.Institution.searchlayout')

@section('search')
<div style="width: 100%;overflow: scroll">
    <table id="example" class="display table table-borderd" >
        <thead>
            <tr style="font-weight: 900;" class="text-primary">
                <th >Institution Name</th>
                <th>Upazila</th>
                <th>District</th>
                <th>Division</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($institution as $institution)
            <tr>
                <td>{{ $institution->name }}</td>
                <td>{{ $institution->upazila }}</td>
                <td>{{ $institution->district }}</td>
                <td>{{ $institution->division }}</td>
                <td class="text-center hover"> <a href="{{ route('visitor', $institution->emis_number) }}" target="_blank" class="btn btn-primary btn-lg w-100 ">Go</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="font-weight: 600;" class="text-primary">
                <th>Institution Name</th>
                <th>Upazila</th>
                <th>District</th>
                <th>Division</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div >
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
@endsection

