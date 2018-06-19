<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Quiniela MercadoLibre | Rusia 2018</title>

    </head>
    <body>

        <div class="flex-center position-ref full-height">

            <div class="content">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <h1>Reglas</h1>
                <h2>Quiniela</h2>
                <h3>Los jugadores sumarán puntos de acuerdo al siguiente criterio:</h3>

                <ul class="rules">
                    <li>Atinar al resultado <strong>1 punto</strong></li>
                    <li>Atinar al marcador <strong>3 puntos</strong></li>
                    <li>Atinar al primer anotador de México <strong>5 punto</strong></li>
                    <li>Atinar al número de goles en el 1er tiempo <strong>3 punto</strong></li>
                    <li>Atinar al número de goles en el 2do tiempo <strong>3 punto</strong></li>
                </ul>

                <div class="title m-b-md">
                    <div class="col-sm-12">
                        @isset($agency)
                            <a href="{{ url("{$agency}/enter") }}" class="btn btn-default register-button">Regístrate</a>
                        @endisset
                    </div>
                </div>

                @isset($agency)
                    <div class="ornato-footer logo-{{ $agency }}"></div>
                @endisset

            </div>
        </div>
    </body>

    <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    <script type="application/javascript" src="{{ mix("/js/app.min.js") }}"></script>
</html>
