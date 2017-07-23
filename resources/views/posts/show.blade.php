@extends('layouts.master')

@section('mainContent')
<h1>
    {{ $post->title }}
    <br/>
    <small><a href="#">{{ $post->user->name }}</a> on <b>{{ $post->created_at->toFormattedDateString() }}</b></small>
</h1>
<br/>

<p>{{ $post->body }}</p>
<br/>

@endsection