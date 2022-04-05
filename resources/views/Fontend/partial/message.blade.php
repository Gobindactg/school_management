@if ($errors->any())
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            <h2 style="color:red;">Please fillup below information</h2>
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif
<!-- display message for delete product data successfully -->
@if (Session::has('success'))
    <div class="alert ">
        <h3 class="text-success text-center">{{ Session::get('success') }}</h3>
    </div>
@endif
@if (Session::has('fail'))
    <div class="alert ">
        <h3 class="text-danger text-center">{{ Session::get('fail') }}</h3>
    </div>
@endif
@if (Session::has('NotRegistered'))
    <div class="alert alert-danger">
        <h3 class="text-danger text-center">{{ Session::get('NotRegistered') }}</h3>
    </div>
@endif
@if (Session::has('sticky_error'))
    <div class="alert alert-danger">
        <h3 class="text-danger text-center">{{ Session::get('sticky_error') }}</h3>
    </div>
@endif

@if (Session::has('delete'))
    <div class="alert alert-success">
        <h3 class="text-danger text-center">{{ Session::get('delete') }}</h3>
    </div>
@endif
@if (Session::has('LoginFail'))
    <div class="alert alert-success">
        <h3 class="text-danger text-center">{{ Session::get('LoginFail') }}</h3>
    </div>
@endif
<!-- display message for delete product data successfully -->
