@extends('partials.master')

@section('title')
News
@endsection

@section('content')

<h1>NAWS PAGE</h1>
<ul>
@foreach($news as $new)
    <li><a href="{{ route('single-news', ['id' => $new->id]) }}">{{ $new->title }}</a> <b>By</b> <i>{{$new->user->name}}</i></li>
@endforeach
</ul>
<a class="btn btn-{{$news->currentPage()==1 ? 'dark' : 'primary'}}" href="{{ $news->previousPageUrl() }}">Previous page</a>
<a class="btn btn-{{$news->hasMorePages() ? 'primary' : 'dark'}}" href="{{ $news->nextPageUrl() }}">Next page</a>
@endsection