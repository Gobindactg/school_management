@extends('Frontend.pages.Institution.searchlayout')

@section('search')
<div class="row">
   
    <div class="col-md-3">
       
            <label for="division_id" class="form-label">{{ __('Division') }}</label>
            <div class="col-md-12">
              <select name="division_name" id="division_id" class="w-100 py-1">
                    <option value="">-- Select Your Division--</option>
                    @foreach ($division as $division)
                        <option value="{{$division->id}}">{{ $division->name }}</option>
                    @endforeach
                </select>
                @error('division_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="submit" value="Search">
       
    
    </div>
    <div class=" col-md-3">
        <form action="{{ route('search.result.show') }}" method="get">
            <label for="district_id" class="form-label">{{ __('District') }}</label>

            <div class="col-md-12">
                <select name="search" id="district-area" class="w-100 py-1">

                </select>

                @error('district_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          <input type="submit" value="Search">
        </form>
    </div>
    


    <div class=" col-md-3">
        <form action="{{ route('search.result.show') }}" method="get">
            <label for="district_id" class="form-label">{{ __('Upazila') }}</label>

            <div class="col-md-12">
                <select name="search" id="upazila-area" class="w-100 py-1">

                </select>

                @error('district_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="submit" value="Search">
        </form>
    </div>
    <div class=" col-md-3">
        <form action="{{ route('search.result.show') }}" method="get">
            <label for="institution_id" class="form-label">{{ __('Institution') }}</label>

            <div class="col-md-12">
                <select name="search" id="institution-area" class="w-100 py-1">

                </select>
                <input type="submit" value="Search">
            </div>
        </form>

    </div>
    
</div>


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
                <td>{{ $institution->upazila->name }}</td>
                <td>{{ $institution->district->name }}</td>
                <td>{{ $institution->division->id }}</td>
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
    </div>
    @include('Frontend/partial/js')

  <script>
         
  $("#division_id").change(function() {
        var division = $("#division_id").val();
        alert(division)
      
    });
  </script>
@endsection
