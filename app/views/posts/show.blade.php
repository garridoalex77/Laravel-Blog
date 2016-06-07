@extends('layouts.master')

@section('title')
    Show Post
@stop

@section('content')
<h1> {{{ $post->title }}} </h1>
<h3> {{{ $post->content }}} </h3>
<footer> Written by: {{{ $post->user->username }}} </footer>
<div class="row">
    <div class="col-xs-2">
        <button class="btn btn-default"><a href="{{ URL::previous() }}">Back</a></button>
    </div>
    @if (Auth::check())
        <div class="col-xs-2">
            {{ Form::model($post, array('action' => array('PostsController@edit', $post->id), 'method' => 'GET')) }}
            {{ Form::submit('Edit', array('class' => 'btn btn-default')) }}
            {{ Form::close() }}
        </div>
        <div class="col-xs-2">
            {{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'delete-form')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-default')) }}
            {{ Form::close() }}
        </div>
    @endif
</div>
@stop