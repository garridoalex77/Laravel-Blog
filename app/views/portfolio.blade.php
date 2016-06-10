@extends('layouts.master')

@section('title')
    Portfolio
@stop

@section('content')

<div class="row">
    <h1 class="col-md-12 col-md-offset-5"><u>My Projects</u></h1>
</div>
<div class="row">

    <div class="col-md-3 col-md-offset-2">
        <a href="/simplesimon"><h1>Simon Says Game:</h1></a>
        <a href="/simplesimon"><img class="img-responsive img-thumbnail" src="/img/simon.png"></a>
    </div>

    <div class="col-md-3">
        <a href="/whackamole"><h1>Whackamole Game:</h1></a>
        <a href="/whackamole"><img class="img-responsive img-thumbnail" src="/img/wam.png"></a>
    </div>

    <div class="col-md-3">
        <a href="/weathermap"><h1>Weather Map:</h1></a>
        <a href="/weathermap"><img class="img-responsive img-thumbnail" src="/img/map.png"></a>
    </div>

</div>
</div>
@stop

