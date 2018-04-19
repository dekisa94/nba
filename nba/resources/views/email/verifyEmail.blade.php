<p>Heloo {{$user->name}}, welcome to out web site!</p>
<a href="{{route('verify-user', ['user_id' => $user->id])}}">Please verify your mail. Click here.</a>