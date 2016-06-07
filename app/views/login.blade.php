@extends('layouts.master')

@section('title')
    Login
@stop

@section('content')
<div class="container">
    <h1>Login</h1>
    <!-- changed array format -->
    {{ Form::open(['action' => 'HomeController@login']) }}
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ $errors->first('email', '<span class="help-block text-danger">:message</span>') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password')}}
        {{ $errors->first('password', '<span class="help-block text-danger">:message</span>') }}
        {{ Form::password('password', array('class' => 'form-control'))}}
    </div> 
    {{ Form::submit('Login', array('class' => 'btn btn-default')) }}
    {{ Form::close() }}
</div>
@stop
