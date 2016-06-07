@extends('layouts.master')

@section('title')
    Index of Posts
@stop

@section('content') 
    @foreach ($posts as $post)
        <div class="container">
            <h1><u><a href="{{action('PostsController@show', $post->id)}}"> {{{ $post->title }}} </a></u></h1>
            <footer>{{{ $post->created_at->format('l, F Y') }}}</footer>
            <h3 class=""> {{{ $post->content }}} </h3>
        </div>
    @endforeach
    <p>{{ $posts->links() }}</p>
@stop