<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Participa en la Quiniela MercadoLibre | Rusia 2018</title>
        <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    </head>
    <body>
        <div class="content">

            <div class="container">

                <div class="ornato-header"></div>

                <div class="row">
                    <figure class="busca-gloria"></figure>
                </div>

                <div class="row">

                    <div class="col-sm-12">

                        <form id="enterForm" class="formComponent" action="{{ url("{$agency}/enter") }}" method="POST">

                            <label for="first_name">Nombre:</label>
                            <input type="text" name="first_name" id="first_name">

                            <label for="last_name">Apellido:</label>
                            <input type="text" name="last_name" id="last_name">

                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email">

                            @csrf

                            <input type="submit" value="Continuar" class="btn btn-default register-button">

                        </form>

                        <div class="bumper"></div>

                    </div>

                </div>

                <figure class="logo-ml"></figure>

                @isset($agency)
                    <div class="_footer logo-{{ $agency }}"></div>
                @endisset
                <div class="ornato-footer"></div>
            </div>
        </div>
    </body>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script type="application/javascript" >

        jQuery(document).ready(function($) {

            if($('#enterForm').length)
                $("#enterForm").validate({
                    ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        first_name: {
                            required: true
                        },
                        last_name: {
                            required: true
                        }
                    },
                    messages: {
                        email: {
                            required: "Por favor introduce tu correo electrónico.",
                            email: "Introduce un email válido"
                        },
                        first_name: {
                            required: "Por favor introduce tu nombre"
                        },
                        last_name: {
                            required: "Por favor introduce tu apellido"
                        }
                    },
                    submitHandler: function ( form, event ) {

                        form.submit();
                    }
                });
        });
    </script>
</html>
