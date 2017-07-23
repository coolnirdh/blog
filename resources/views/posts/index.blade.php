@extends('layouts.master')

@section('mainContent')
<h1>All Posts</h1>
<br/>

@foreach($posts as $post)
<div>
    <h3>
        {{ $post->title }}
        <br/>
        <small><a href="#">{{ $post->user->name }}</a> on <b>{{ $post->created_at->toFormattedDateString() }}</b></small>
    </h3>

    <p>{{ $post->body }}</p>
    <br/>
</div>
@endforeach

@endsection