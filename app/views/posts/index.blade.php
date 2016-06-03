@extends('layouts.master')

@section('title')
    Index of Posts
@stop

@section('content') 
    @foreach ($posts as $post)
        <h1><a href="{{{action('PostsController@show', $post->id)}}}"> {{{ $post->title }}} </a></h1>
        <h3> {{{ $post->content }}} </h3>
    @endforeach
@stop