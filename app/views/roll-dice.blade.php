@extends('layouts.master')

@section('title')
    Roll
@stop

@section('content')
    <h1>Hello Guess a Number</h1>
    <h2>{{{ $message }}}</h2>
    <h2>Your Guess: {{{ $guess }}}</h2>
    <h2>Dice Roll: {{{ $roll }}}</h2>

    <a href="{{{ action('HomeController@rollDice', 1) }}}">Guess 1</a>
    <a href="{{{ action('HomeController@rollDice', 2) }}}">Guess 2</a>
    <a href="{{{ action('HomeController@rollDice', 3) }}}">Guess 3</a>
    <a href="{{{ action('HomeController@rollDice', 4) }}}">Guess 4</a>
    <a href="{{{ action('HomeController@rollDice', 5) }}}">Guess 5</a>
    <a href="{{{ action('HomeController@rollDice', 6) }}}">Guess 6</a>
@stop