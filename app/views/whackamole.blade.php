@extends('layouts.master')

@section('title')
    Whack-A-Mole
@stop

@section('head')
    <link rel="stylesheet" href="/css/whackamole.css">
@stop

@section('content')
    <h1 id="title">Whack-A-House</h1>
    <h1 id="score">Score: </h1>
    <h1 id="timer">Time: </h1>
    <button id="start">Start</button>
    <h1 id="highScore">High Score: </h1>
    <div id="grid">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
    </div>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="/js/whackamole.js"></script>
@stop