@extends('layouts.master')

@section('title')
    Whack-A-Mole
@stop

@section('head')
    <link rel="stylesheet" href="/css/whackamole.css">
@stop

@section('content')
<div class="row">
    <h1 class="col-sm-offset-4" id="title">Whack-A-House</h1>
</div>
<div class="row">
    <h1 class="col-sm-4" id="score">Score: </h1>
    <h1 class="col-sm-4" id="timer">Time: </h1>
    <h1 class="col-md-4" id="highScore">High Score: </h1>
</div>
<div class="row">
    <button class="col-md-offset-5" id="start">Start</button>
</div>
        
    <div id="grid">
        <div class="row">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
        
        <div class="row">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
        
        <div class="row">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
        
        <div class="row">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="/js/whackamole.js"></script>
@stop