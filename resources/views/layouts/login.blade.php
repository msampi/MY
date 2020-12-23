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
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="login-page">
        <div class="row">
            <div class="col-md-3 col-md-offset-5 margin-top-login text-center">
                <span class="logo-lg"><img class="admin-logo" src="{{ URL::asset('img/logo500.png') }}"></span>
            </div>
        </div>
        <div class="row" style="margin-top: 30px">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
