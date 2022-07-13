@extends('layouts.base')

@section('title')
    Cat Details
@endsection

@section('content')

    <div class="card text-center mt-5">
            <div class="card-header">
                <b>CAT DETAILS</b>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$cats->name}}</h5>
                <p class="card-text">{{$cats->description}}.</p>
                <a href="/cat/edit/{{$cats->id}}"><span class="btn btn-primary">Edit</span></a>
                <a href="/cat/delete/{{$cats->id}}"><span class="btn btn-danger">Delete</span></a>
            </div>
    </div>

@endsection