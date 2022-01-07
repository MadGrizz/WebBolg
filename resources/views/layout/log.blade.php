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
<div class="row h-100">
    
<div class="row h-100">
    
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">CHOKU</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="" class="nav-link text-white" id="Home">
            <svg class="bi me-2 white" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
            </a>
        </li>
        <li>
            <a href="" class="nav-link text-white" id="Orders">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Profile
            </a>
        </li>
        <li>
            <a class="nav-link text-white"  onclick="logout()">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            logout
            </a>
        </li>
        </ul>
        <hr>
        
    </div>

    <div class="col container-fluid">
        @yield('content')
    </div>

</div>
</body>

</html>

<script>
    function logout(){
        localStorage.removeItem('us_id');
        localStorage.removeItem('us_name');
        window.location.href = '/';
    }
</script>