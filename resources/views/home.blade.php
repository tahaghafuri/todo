@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                <li class="list-group-item"><a href="/todo" style="color: cornflowerblue">Todo List</a></li>
                <li class="list-group-item"><a href="/cat" style="color: cornflowerblue">Cat List</a></li>
            </ul>
        </div>
    </div>

@endsection