@if(Session::has('status'))

<div class="alert alert-success">
    {{ session('status') }}
</div>

@endif

@if(Session::has('update'))

<div class="alert alert-success">
    {{ session('update') }}
</div>

@endif

@if(Session::has('delete'))

<div class="alert alert-success">
    {{ session('delete') }}
</div>

@endif

@if(count($errors)>0)

@foreach ($errors->all() as $error)
<div class="alert alert-danger">
    {{ $error }}
</div>

@endforeach

@endif

