@extends('partials.master')

@section('title')
Register
@endsection

@section('content')

<form method="POST" action="/register">
    {{csrf_field()}}
    <h1>Registration:</h1>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'name'])
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'email'])
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'password'])
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        @include('partials.error-message', ['fieldTitle' => 'password_confirmation'])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>

@endsection