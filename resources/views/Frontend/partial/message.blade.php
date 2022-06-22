{{-- message for social media --}}
@push('js')
@if ($errors->any())

@endif
@endpush



<!-- display message for delete product data successfully -->
@if (Session::has('success'))
@push('js')
<script>
    toastr.success("{{ Session::get('success') }}");
</script>
@endpush
<div class="alert ">
    <h3 class="text-success text-center">{{ Session::get('success') }}</h3>
</div>
@endif
@if (Session::has('fail'))
<div class="alert alert-danger">
    <h3 class="text-white text-center">{{ Session::get('fail') }}</h3>
</div>
@endif
@if (Session::has('NotRegistered'))
<div class="alert alert-danger">
    <h3 class="text-white text-center">{{ Session::get('NotRegistered') }}</h3>
</div>
@endif
@if (Session::has('sticky_error'))
<div class="alert alert-danger">
    <h3 class="text-white text-center">{{ Session::get('sticky_error') }}</h3>
</div>
@endif

@if (Session::has('delete'))
<div class="alert alert-success">
    <h3 class="text-dark text-center">{{ Session::get('delete') }}</h3>
</div>
@endif
@if (Session::has('LoginFail'))
<div class="alert alert-danger">
    <h3 class="text-white text-center">{{ Session::get('LoginFail') }}</h3>
</div>
@endif
<!-- display message for delete product data successfully -->