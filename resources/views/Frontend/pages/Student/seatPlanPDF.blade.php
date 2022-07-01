<style>
    .institution {
        font-family: tahoma;
        font-style: italic;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .address {
        font-size: 15px;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .seatplan {
        text-align: center;
        color: teal;
        margin: 0;
        padding: 2px;
    }

    .body_info {
        width: 100%;
    }

    .body_info thead tr th {
        text-align: left;
    }

    .main_body {
        position: relative;
        width: 100%;

    }

    .body_sub {
        display: inline-block;
        border: 1px solid black;
        width: 31%;
        margin: 5px;
        box-sizing: border-box;

    }
</style>
<div class="main_body">
    @foreach($marks as $mark)
    <div class="body_sub">
        @foreach(App\Models\student_mark::institution() as $institution)
        <h4 class="institution"><strong>{{$institution->name}}</strong></h4>
        <p class="address"><strong> {{$institution->address}}</strong></p>
        <p class="seatplan" style="font-family: tahoma; font-style:italic"><strong>SEAT PLAN</strong></p>
        @endforeach
        <table class="body_info">
            <thead>
                <tr>
                    <th>
                        <p style="font-size: 12px"><strong>Name :</strong> {{$mark->name}}</p>
                        <p style="font-size: 12px"><strong>Roll :</strong> {{$mark->st_roll}}</p>
                        <p style="font-size: 12px"><strong>Class :</strong> {{$mark->class}}</p>
                    </th>
                    <th>
                        <p style="font-size: 12px"><strong>Group :</strong> {{$mark->st_group}}</p>
                        <p style="font-size: 12px"><strong>Year :</strong> {{$mark->st_year}}</p>
                        <p> </p>
                    </th>
                </tr>
            </thead>
        </table>
        <p style="font-size: 12px; padding:0; margin:0px; padding-left:52%"><strong>Signature of Head</strong> </p>


    </div>
    @endforeach
</div>