@extends('layouts.base')
@section('title')
    Todo List
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