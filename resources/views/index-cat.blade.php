@extends('layouts.app')
@section('title')
    Cat List
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($cats as $cat)
                    <li class="list-group-item"><a href="/cat/details/{{$cat->id}}" style="color: cornflowerblue">{{$cat->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection