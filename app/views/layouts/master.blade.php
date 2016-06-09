<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/slate/bootstrap.min.css" rel="stylesheet" integrity="sha384-X9JiR5BtXUXiV6R3XuMyVGefFyy+18PHpBwaMfteb/vd2RrK6Gt4KPenkQyWLxCC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    @yield('head')
</head>
<body>
@include('partials.navbar')
    @if (Session::has('success message'))
        <div class="alert alert-success">{{{Session::get('success message') }}}</div>
    @elseif (Session::has('fail message'))
        <div class="alert alert-warning">{{{Session::get('fail message') }}}</div>
    @elseif (Session::has('logout message'))
        <div class="alert alert-success">{{{Session::get('logout message') }}}</div>
    @endif

    @yield('content')

<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>