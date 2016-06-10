@extends('layouts.master')

@section('title')
    Index of Post
@stop

@section('content') 
    @foreach ($posts as $post)
        <div class="post">
            <h1><u><a href="{{action('PostsController@show', $post->id)}}"> {{{ $post->title }}} </a></u></h1>
            <h3 class=""> {{{ str_limit($post->content, 40) }}} </h3>
            <footer>{{{ $post->created_at->format('l, F Y') }}}</footer>
        </div>
    @endforeach
    <p>{{ $posts->links() }}</p>
@stop