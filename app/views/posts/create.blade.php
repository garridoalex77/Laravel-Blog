@extends('layouts.master')

@section('title')
    Create
@stop

@section('content')
<div class="container">
    <h1>Create a Post</h1>
        <form action="{{{ action('PostsController@store') }}}" method="POST">
            <div class="form-group">
                <label class="control-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" value="{{{ Input::old('title') }}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control rows 3" name="content">{{{ Input::old('content') }}}</textarea>
            </div>
            <input class="btn btn-default" type="submit">
        </form>
</div>
@stop
    