<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Magyates - Taking Corporate Access into the Digital Age</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="login-page">
        <div class="col-md-2 col-md-offset-5 mt30">
            <img class="img-responsive" src="{{ URL::asset('img/Logo.png') }}">
        
        </div>
        
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
