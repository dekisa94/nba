@extends('partials.master')

@section('title')
News
@endsection

@section('content')

<h1>{{$oneNew->title}}</h1>
News for teams:
<ul>
@foreach($oneNew->teams as $team)
<li><a href="{{ route('show-team', ['team' => $team->name]) }}">{{$team->name}}</a></li>
@endforeach
</ul>
<p>{{$oneNew->content}}</p>
<hr>
<b>{{$oneNew->user->name}}</b>
<p>{{$oneNew->user->email}}</p>
@endsection