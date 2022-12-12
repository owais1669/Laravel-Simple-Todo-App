@extends('layouts.app')


@section('content')

<h1 class="text-center">@yield('title', 'All Todos')</h1>
@include('inc.messages')
@foreach ($todos as $todo)

<div class="card my-2">
    <div class="card-body">

        <h5><a href="todo/{{ $todo->id }}">{!! $todo->text !!}</a></h5>
        <h5 class="badge badge-danger">{{ $todo->due }}</h5>



        <div class="float-right">

            {{ Form::open([
                'method'=>'POST',
                'action'=>['App\Http\Controllers\TodoController@destroy',$todo->id]
            ]) }}

            {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}

            {{ Form::close() }}

        </div>

    </div>
</div>


@endforeach
@endsection
