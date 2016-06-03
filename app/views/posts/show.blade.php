@extends('layouts.master')

@section('title')
    Show Post
@stop

@section('content')
    <h1> {{{ $post->title }}} </h1>
    <h3> {{{ $post->content }}} </h3>
@stop