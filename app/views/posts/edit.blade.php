@extends('layouts.master')

@section('title')
    Edit Post
@stop

@section('content')
<div class="container">
    <h1>Edit a Post</h1>
    {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ $errors->first('title', '<span class="help-block text-danger">:message</span>') }}
        {{ Form::text('title', $post->title, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
    {{ Form::label('content', 'Content')}}
    {{ $errors->first('content', '<span class="help-block text-danger">:message</span>') }}
    {{ Form::textarea('content', $post->content, array('class' => 'form-control'))}}
    </div> 
    {{ Form::submit('Save', array('class' => 'btn btn-default')) }}
    {{ Form::close() }}
</div>
@stop
    