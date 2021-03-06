@extends('layouts.base')

@section('title')
    Create Category
@endsection

@section('menu')
<a href="/cat"><span class="navbar-brand mb-0 h1">Cat</span></a>
<a href="/cat/create"><span class="btn btn-primary">Create Cat</span></a>
@endsection

@section('content')

    <form action="{{route('cat.store')}}" method="post" class="mt-4 p-4">
        @csrf
        @if($errors->any())
            @foreach($errors->all() as $message)
                <h1>{{$message}}</h1>
            @endforeach
        @endif
        <div class="form-group m-3">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Category Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

@endsection
