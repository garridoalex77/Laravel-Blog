@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="/css/simon.css">
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
@stop
@section('title')
    Simon Game
@stop

@section('content')
    <div id="container">
        <div id="head">
            <h1 id="title">Simon Game</h1>
            <button id="start">Start</button>
            <h1 id="score">Score</h1>
        </div>
        <div id="box">
        <div class="row">
            <div id="red" class="buttons"></div>
            <div id="yellow" class="buttons"></div>
        </div>
        <div class="row">
            <div id="blue" class="buttons"></div>
            <div id="green" class="buttons"></div>
        </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"   integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="   crossorigin="anonymous"></script>
<script src="js/simon.js"></script>
@stop