<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('logreg/fonts/icomoon/style.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('logreg/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('logreg/css/style.css') }}">

    <title>Login #4</title>
</head>

<body>
    @yield('content')
    <script src="{{ asset('logreg/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('logreg/js/popper.min.js') }}"></script>
    <script src="{{ asset('logreg/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('logreg/js/main.js') }}"></script>
</body>

</html>