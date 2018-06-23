<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Quiniela MercadoLibre | Rusia 2018</title>
        <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    </head>
    <body>


        <div class="content">

            <div class="container">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <div class="title m-b-md">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h1 class="ornatorrinco">Gracias <br><span class="_white">por participar</span></h1>
                        <h3>Los resultados se publicarán al terminar el partido contra Suecia.</h3>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

                <figure class="logo-ml"></figure>

                @isset($agency)
                    <div class="_footer logo-{{ $agency }}"></div>
                @endisset
                <div class="ornato-footer"></div>

            </div>
        </div>
    </body>

    <script type="application/javascript" src="{{ mix("/js/app.min.js") }}"></script>
</html>
