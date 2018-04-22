@extends('partials.master')

@section('title')
Create news
@endsection

@section('content')

<form method="POST" action="/news">
    {{csrf_field()}}
    <h1>Create news:</h1>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'title'])
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <input type="textarea" id="content" name="content" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'content'])
    </div>
    
    <div class="form-group"> 
    <h3>New for teams:</h3>
    @foreach($teams as $team)
      
        <label for="{{$team->name}}">{{$team->name}}</label>
        <input type="checkbox" class="form-control" id="{{$team->name}}" name="teams[]" value="{{$team->id}}" checked>

    @endforeach
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection