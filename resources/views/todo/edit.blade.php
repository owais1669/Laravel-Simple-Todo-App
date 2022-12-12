@extends('layouts.app')


@section('content')

{!! Form::open([
    'method'=>'POST',
    'action'=>['App\Http\Controllers\TodoController@update', $todo->id]
]) !!}

<div class="form-group">
    {{ Form::label('text', 'Title') }}
    {{ Form::text('text', $todo->text, ['placeholder'=>'Enter Title', 'class'=>'form-control']) }}
{{--
    <span style="color: red;">@error('text')
        {{ $message }}
    @enderror</span> --}}

</div>


<div class="form-group">
    {{ Form::label('due', 'Due Date') }}
    {{ Form::date('due', $todo->due, ['class'=>'form-control']) }}
{{--
    <span  style="color: red;">@error('due')
        {{ $message }}
    @enderror</span> --}}

</div>



<div class="form-group">
    {{ Form::label('body', 'Todo Details') }}
    {{ Form::textarea('body', $todo->body, ['placeholder'=>'Enter Todo Details', 'class'=>'form-control']) }}

    {{-- <span  style="color: red;">@error('body')
        {{ $message }}
    @enderror</span> --}}

</div>
    {{ Form::submit('Update', ['class'=>'btn btn-success'])}}

{{ Form::close() }}

@endsection
