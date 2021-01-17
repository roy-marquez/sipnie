<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sipnie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    </head>
    <body>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="logo"> </div>
                <div class="title m-b-md">
                    Sistema de Información <br/>
                    Programa Nacional de Informática Educativa.
                </div >
                @if (Route::has('login'))
                    <div class="links center">
                        @auth
                            <a href="{{ url('/home') }}">Inicio</a>
                            <a href="{{ route('register') }}">Manual</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registro</a>
                            @endif

{{--                            @if (Route::has('register'))--}}
{{--                                <a href="{{ route('login') }}">Manual</a>--}}
{{--                            @endif--}}
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    </body>
</html>
