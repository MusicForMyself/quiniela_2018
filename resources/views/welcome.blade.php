<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Quiniela MercadoLibre | Rusia 2018</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <div class="title m-b-md">
                    <a href="{{ url("enter") }}" class="btn btn-default">Regístrate</a>
                </div>

                <div class="ornato-footer"></div>

            </div>
        </div>
    </body>
</html>
