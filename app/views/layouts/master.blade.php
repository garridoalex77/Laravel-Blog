<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    @yield('head')
</head>
<body>
@include('partials.navbar')
<div class="background">
    <div class="container-fluid">
        @if (Session::has('success message'))
            <div class="alert alert-success">{{{Session::get('success message') }}}</div>
        @elseif (Session::has('fail message'))
            <div class="alert alert-warning">{{{Session::get('fail message') }}}</div>
        @elseif (Session::has('logout message'))
            <div class="alert alert-success">{{{Session::get('logout message') }}}</div>
        @endif
        <!-- Login Modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
        <!-- <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal">
            <div class="modal-content">
              ...
            </div>
          </div>
        </div> -->

        @yield('content')
    </div>
</div>
<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>