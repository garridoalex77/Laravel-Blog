@extends('layouts.master')

@section('title')
    Show Post
@stop

@section('content')
    <h1> {{{ $post->title }}} </h1>
    <h3> {{{ $post->content }}} </h3>
    {{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
    {{ Form::submit('Delete', array('class' => 'btn btn-default')) }}
    {{ Form::close() }}
@stop