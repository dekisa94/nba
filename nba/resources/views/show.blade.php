@extends('partials.master')

@section('title')
Team
@endsection

@section('content')

<h1>{{$team->name}}</h1>
<ul>
    <li>{{ $team->email }}</li>
    <li>{{ $team->address }}</li>
    <li>{{ $team->city }}</li>
</ul>
<h3>List of players:</h3>
<ul>
@foreach($team->players as $player)
<li><a href="{{route('single-player', ['id' => $player->id])}}">{{ $player->first_name }}</a></li>
@endforeach
</ul>
<hr>
<h2>Leave your comment here:</h2>

<form method="POST" action="{{ route('comment-team', ['team_id' => $team->id]) }}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="content">Text of comment:</label>
        <input type="textarea" id="content" name="content" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'content'])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Comment</button>
    </div>
</form>

<h2>Comments:</h2>
@foreach($team->comments as $comment)
<ul>
    <li><i>{{ $comment->user->name }}</i> <b>{{ $comment->content }}</b> <br></li>
</ul>
@endforeach

@endsection