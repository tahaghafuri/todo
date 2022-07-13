@extends('layouts.base')

@section('title')
    Todo List
@endsection

@section('menu')
<a href="/"><span class="navbar-brand mb-0 h1">Home</span></a>
<a href="/todo/create"><span class="btn btn-primary">Create Todo</span></a>
@endsection

@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item"><a href="/todo/details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection