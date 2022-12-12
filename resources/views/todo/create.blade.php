@yield('Create New Todo')
@extends('layouts.app')


@section('content')

<a href="/" class="btn btn-info">Go Back</a>
<h1 class="text-center">Create New Todo</h1>
<div class="">

    @include('inc.messages')
    {{ Form::open([
        'method'=>'POST',
        'action'=>'App\Http\Controllers\TodoController@store',
        'files'=>true

    ]) }}
    <div class="form-group">
        {{ Form::label('text', 'Title') }}
        {{ Form::text('text', old('text'), ['placeholder'=>'Enter Title', 'class'=>'form-control']) }}
{{--
        <span style="color: red;">@error('text')
            {{ $message }}
        @enderror</span> --}}

    </div>


    <div class="form-group">
        {{ Form::label('due', 'Due Date') }}
        {{ Form::date('due', old('due'), ['class'=>'form-control']) }}
{{--
        <span  style="color: red;">@error('due')
            {{ $message }}
        @enderror</span> --}}

    </div>



    <div class="form-group">
        {{ Form::label('body', 'Todo Details') }}
        {{ Form::textarea('body', old('body'), ['placeholder'=>'Enter Todo Details', 'class'=>'form-control']) }}

        {{-- <span  style="color: red;">@error('body')
            {{ $message }}
        @enderror</span> --}}

    </div>
    <div class="form-group">
        {{ Form::submit('Create New Todo', ['class'=>'btn btn-success']) }}
    </div>
    {{ Form::close() }}
</div>

@endsection
