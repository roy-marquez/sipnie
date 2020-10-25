<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Título de la pagina de error -->
        @yield('error-title')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" >

                @yield('content')

                <div class="links center">
                    <a href="{{ url()->previous() }}"><< Regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
