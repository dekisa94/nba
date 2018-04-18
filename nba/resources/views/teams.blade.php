@extends('partials.master')

@section('title')
TEAMS
@endsection

@section('content')
<h1>TEAMS</h1>
<ul>
@foreach($teams as $team)
    <li><a href="{{route('single-team', ['id' => $team->id])}}">{{ $team->name }}</a></li>
@endforeach
</ul>

@endsection