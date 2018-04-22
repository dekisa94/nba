
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>

  <body>
  @if($message = session('message'))
        <div class="alert alert-success">
          {{$message}}
        </div>
        @endif

         <div class="sidenav">
      @foreach($teams as $team)
        <a href="{{ route('show-team', ['team' => $team->name]) }}">{{$team->name}}</a>
      @endforeach
    </div>
    
    <div class="container">
    @yield('content')
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="/teams">NBA</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        @if(auth()->check())
        <li class="nav-item">
            <a class="nav-link" href="">{{auth()->user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/logout">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/login">Login</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/news">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news/create">Add news</a>
          </li>
        </ul>
      </div>
    </nav>
    
    
  </body>
</html>
