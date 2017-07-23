@extends('layouts.master')

@section('mainContent')
<h1>
    Create New Post
</h1>
<br/>

<form action="/posts" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label" for="title">Title</label>
        <input class="form-control" type="text" name="title"/>
    </div>
    <div class="form-group">
        <label class="control-label" for="body">Body</label>
        <textarea class="form-control" name="body" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
<br/>

@endsection