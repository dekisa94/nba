@extends('partials.master')

@section('title')
Login
@endsection

@section('content')
<form method="POST" action="/login">
{{csrf_field()}}
<h1>Login:</h1>
    <div class="form-group">
        <label for="email">Email:</label>
        <input id="title" type="text" name="email" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'email'])
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'password'])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>

@if (count($errors->all()) > 0)

@foreach($errors->all() as $error)
    <div class="form-group">
        <div class="alert alert-danger">
            <li>{{ $error }}</li>
        </div>
    </div>
@endforeach

@endif
@endsection