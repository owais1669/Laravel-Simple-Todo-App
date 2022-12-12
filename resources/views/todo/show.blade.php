@extends('layouts.app')

@section('content')

<h2>Your Todo Details</h2>

<button class="btn btn-info my-4"><a href="/" class="text-light">Go Back</a></button>
<button class=" btn btn-primary float-right my-4"><a href="/todo/{{ $todo->id }}/edit" class="text-light">Edit</a></button>
<div class="jumbotron">
    <h3>{{ $todo->text }}</h3>
    <span class="badge badge-danger">{{ $todo->due }}</span>
    <p>{{ $todo->body }}</p>

</div>

@endsection
