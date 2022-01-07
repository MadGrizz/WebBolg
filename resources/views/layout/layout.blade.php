<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Demo - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="js/app.js" charset="UTF-8"></script>
    <style>
        .wt{
            color: #ffffff; 
        }
        .rb{
            float: right;
        }
        table, th, td, tr {
            border: 1px solid white;
        }
        .wbd{
            background-color: #FFFFFF;
        }
        .talr {
            text-align: right;
        }
    </style>
</head>
<body>
<div>
    
    <div class="container-fluid">
        <div id="app">
            @yield('content')
        </div>
    </div>
</div>
</body>

</html>