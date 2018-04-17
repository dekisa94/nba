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