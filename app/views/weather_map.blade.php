@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/map_style.css">
@stop

@section('title')
	Weather Map
@stop

@section('content')
	<div class="container">
		<div class="row" id="cityName"></div>
	</div>
	<div id="LatLngSearch">
		<input class="" id="lng" type="text" placeholder="Longitude"></input>
		<input class="" id="lat" type="text" placeholder="Latitude"></input>
		<button class="btn btn-info" id="lSearch">Search</button>
	</div>
	<div class="row data">
		<div class="dayInfo col-xs-4"></div>
		<div class="dayInfo col-xs-4"></div>
		<div class="dayInfo col-xs-4"></div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<input id="pac-input" class="controls" type="text" placeholder="Search Box">
			<div id="map-canvas"></div>
		</div>
	</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-_mAWO1NFajlNGKvSU4W8bQTT5ylANVU&libraries=places"></script>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="js/map.js"></script>
@stop