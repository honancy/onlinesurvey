<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rapid Survey on R&D Disciplines in UPM</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        .topbar {
            background-color: black;
            color: lightgrey;
        }
        .header {
            background-color: lightgrey;
        }
        .footer {
            background-color: white;
        }
        @yield('css')
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">A Survey for UPM Academics</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1> Rapid Survey on R&D Disciplines in UPM </h1>
            <h2> Deputy Vice Chancellor's Office (Research and Innovation) </h2>
            @yield('sidebar')
        </div>
    </div>

    @include('errors')

    <div class="container">
        @yield('content')
    </div>


    <div class="container">
        <footer>
            <hr/>
            (c) 2016 Universiti Putra Malaysia. All rights reserved.
        </footer>
    </div>

    @yield('script')
</body>
</html>
