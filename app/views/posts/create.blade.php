@extends('layouts.master')

@section('title')
    Create
@stop

@section('content')
       

<div class="container">
    <h1>Create a Post</h1>
    <!-- changed array format -->
    {{ Form::open(['action' => 'PostsController@store', 'files' => true]) }}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ $errors->first('title', '<span class="help-block text-danger">:message</span>') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Content')}}
        {{ $errors->first('content', '<span class="help-block text-danger">:message</span>') }}
        {{ Form::textarea('content', null, array('class' => 'form-control')) }}
    </div> 
    {{ Form::label('img', 'Image') }}
    {{ Form::file('img', array('class' => 'form-control')) }}
    {{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
    {{ Form::close() }}
</div>
@stop
    