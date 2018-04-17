<h1>{{ $player->first_name}} {{ $player->last_name }}</h1>

<p>{{ $player->email }}</p>
<a href="{{route('single-team', ['id' => $player->team->id])}}">{{ $player->team->name }}</a>