<!doctype html>
<html lang="en">
    <head>
        <!-- Meta information -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- External CSS -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-3.3.5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
        
        <!-- External JavaScript -->
        <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/bootstrap-3.3.5.min.js') }}"></script>

        <!-- Page title -->
        <title>Laravel CRUD app</title>

    </head>
    <body>
            <!-- Start of navigation -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Laravel CRUD app</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                  </ul>
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/create') }}">Create</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End of navigation -->
