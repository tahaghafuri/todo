@extends('layouts.base')

@section('title')
    Todo Edit
@endsection

@section('menu')
<a href="/todo"><span class="navbar-brand mb-0 h1">Todo</span></a>
<a href="/todo/create"><span class="btn btn-primary">Create Todo</span></a>
@endsection

@section('content')

    <form action="/todo/update/{{$todos->id}}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" value="{{$todos->title}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"> {{$todos->description}} </textarea>
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Category</label>
            <select name="catid" class="form-select">
                @foreach($cats as $cat)
                <option value="{{ $cat->id }}" @if($cat->id == $todos->id) selected @endif>{{ $cat->title }}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

@endsection