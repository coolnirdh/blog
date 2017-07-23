@extends('layouts.master')

@section('mainContent')
<h1>
    Create New Post
</h1>
<br/>

<form action="/posts" method="post">
    {{ csrf_field() }}
    <div class="form-group {{ count($errors->get('title')) > 0 ? 'has-error' : '' }} ">
        <label class="control-label" for="title">Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}"/>
        <span class="help-block">{{ implode("<br/>", $errors->get('title')) }}</span>
    </div>
    <div class="form-group {{ count($errors->get('body')) > 0 ? 'has-error' : '' }} ">
        <label class="control-label" for="body">Body</label>
        <textarea class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
        <span class="help-block">{{ implode("<br/>", $errors->get('body')) }}</span>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
<br/>

@endsection