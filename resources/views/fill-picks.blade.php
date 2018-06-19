<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Participa en la Quiniela MercadoLibre | Rusia 2018</title>

    </head>

    <body>

        <div class="container flex-center position-ref full-height">

            <div class="content">

                <div class="ornato-header"></div>

                <figure class="busca-gloria"></figure>

                <h1>Quiniela</h1>
                <h2>2018</h2>

                <section class="match">

                    <div class="row">

                        <div class="col-2 col-xs-2"></div>
                        <div class="col-2 col-xs-2">
                            <div class="form-group">
                                <label for="">México</label>
                                <i class="flag mexico"></i>
                            </div>
                        </div>
                        <div class="col-2 col-xs-2">
                            <div class="form-group">
                                <input class="form-control" type="checkbox" name="result_1" value="mex">
                            </div>
                        </div>
                        <div class="col-2 col-xs-2">
                            <div class="form-group">
                                <input class="form-control" type="checkbox" name="result_1" value="cor">
                            </div>
                        </div>
                        <div class="col-2 col-xs-2">
                            <div class="form-group">
                                <label for="">Corea</label>
                                <i class="flag cor"></i>
                            </div>
                        </div>
                        <div class="col-2 col-xs-2"></div>

                    </div> {{--END row--}}

                    <div class="row">

                        <div class="col-12 col-xs-12">
                            <label for="prop_1_1">¿Cuántos goles habrá en el 2do tiempo?</label>
                            <select name="prop_1_1" id="prop_1_1">
                                <option value="21">No habrá anotador</option>
                                <option value="0">Edson Álvarez </option>
                                <option value="1">Hugo Ayala </option>
                                <option value="2">Jesús Gallardo</option>
                                <option value="3">Miguel Layún </option>
                                <option value="4">Rafa Márquez </option>
                                <option value="5">Héctor Moreno</option>
                                <option value="6">Diego Reyes</option>
                                <option value="7">Carlos Salcedo</option>
                                <option value="8">Jonathan Dos Santos</option>
                                <option value="9">Marco Fabián</option>
                                <option value="10">Andrés Guardado</option>
                                <option value="11">Héctor Herrera</option>
                                <option value="12">Javier Aquino</option>
                                <option value="13">Jesús Corona</option>
                                <option value="14">Gio Dos Santos</option>
                                <option value="15">Chicharito Hernández</option>
                                <option value="16">Raúl Jiménez</option>
                                <option value="17">Hirving Lozano</option>
                                <option value="18">Oribe Peralta</option>
                                <option value="19">Carlos Vela</option>
                                <option value="20">Erick Gutiérrez </option>
                            </select>
                        </div>

                    </div> {{--END row--}}

                    <div class="row">

                        <div class="col-12 col-xs-12">
                            <label for="">Primer anotador de México</label>
                            <select name="prop_1_2" id="prop_1_2">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </div>

                    </div> {{--END row--}}

                    <div class="row">

                        <div class="col-12 col-xs-12">
                            <label for="">¿Cuántos goles habrá en el 1er tiempo?</label>
                            <select name="prop_1_3" id="prop_1_3">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                            </select>
                        </div>

                    </div> {{--END row--}}

                </section> {{--END match--}}


                @isset($agency)
                    <div class="ornato-footer logo-{{ $agency }}"></div>
                @endisset

            </div>

        </div>

    </body>

    <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    <script type="application/javascript" src="{{ mix("/js/app.min.js") }}"></script>

</html>
