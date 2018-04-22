@extends('partials.master')

@section('title')
News
@endsection

@section('content')

<h1>NEWS PAGE</h1>
<ul>
@foreach($news as $new)
    <li><a href="{{ route('single-news', ['id' => $new->id]) }}">{{ $new->title }}</a> <b>By</b> <i>{{$new->user->name}}</i></li>
@endforeach
</ul>
@endsection