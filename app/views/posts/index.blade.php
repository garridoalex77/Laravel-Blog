@extends('layouts.master')

@section('title')
    Index of Posts
@stop

@section('content') 
    @foreach ($posts as $post)
        <div class="container">
            <h1><a href="{{action('PostsController@show', $post->id)}}"> {{{ $post->title }}} </a></h1>
            <p>{{{ $post->created_at->format('l, F Y') }}}</p>
            <h3 class="bg-primary"> {{{ $post->content }}} </h3>
        </div>
    @endforeach
    <p>{{ $posts->links() }}</p>
@stop