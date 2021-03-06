@extends('layouts.base')

@section('title')
    Cat Edit
@endsection

@section('menu')
<a href="/cat"><span class="navbar-brand mb-0 h1">Cat</span></a>
<a href="/cat/create"><span class="btn btn-primary">Create Cat</span></a>
@endsection

@section('content')

    <form action="/cat/update/{{$cats->id}}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Cat Name</label>
            <input type="text" class="form-control" value="{{$cats->title}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Cat Description</label>
            <textarea class="form-control" name="description" rows="3"> {{$cats->description}} </textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

@endsection