<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | {{ config('app.name', 'Laravel') }}</title>

    

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

    
<div class="container-fluid fondo-login" id="app">

    <div class="div-logo-scpns">
        <img src="{{ asset('img/sintranordessa.png') }}" class="img-logo" />
    </div>

    <router-view></router-view>

    <router-link to="/">Login</router-link>
    <router-link to="/PasswordReset">PasswordReset</router-link>



</div>


    


<!-- Scripts -->
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>
