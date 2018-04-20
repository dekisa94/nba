@extends('partials.master')

@section('title')
News
@endsection

@section('content')

<h1>{{$oneNew->title}}</h1>
@foreach($oneNew->teams as $team)
News for teams: <a href="">{{$team->name}}</a>
@endforeach
<p>{{$oneNew->content}}</p>
<hr>
<b>{{$oneNew->user->name}}</b>
<p>{{$oneNew->user->email}}</p>
@endsection