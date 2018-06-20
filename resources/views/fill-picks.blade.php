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

                <h1>Reglas</h1>
                <h2>Quiniela</h2>
                <h3>Los jugadores sumarán puntos de acuerdo al siguiente criterio:</h3>
                <div class="row">
                    <ul class="rules">
                        <li>Atinar al resultado <strong>1 punto</strong></li>
                        <li>Atinar al marcador <strong>3 puntos</strong></li>
                        <li>Atinar al primer anotador de México <strong>5 punto</strong></li>
                        <li>Atinar al número de goles en el 1er tiempo <strong>3 punto</strong></li>
                        <li>Atinar al número de goles en el 2do tiempo <strong>3 punto</strong></li>
                    </ul>
                </div>

                <h1>Quiniela</h1>
                <h2>2018</h2>
                <form id="fillPicksForm" class="formComponent full" method="POST" action="{{ url("{$agency}/fill-picks") }}">

                    <section class="match">

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for=""><i class="flag mexico"></i>México</label>
                                </div>
                            </div>
                            <div class="col-xs-2 nopadding">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="result_1_a" id="result_1_a">
                                </div>
                            </div>
                            <div class="col-xs-2 nopadding">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="result_1_b" id="result_1_b">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for=""><i class="flag cor"></i>Corea</label>
                                </div>
                            </div>
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <label for="prop_1_1">Primer anotador de México</label>
                                <select name="prop_1_1" id="prop_1_1" class="form-control">
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
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <label for="prop_1_2">¿Cuántos goles habrá en el 1er tiempo?</label>
                                <select name="prop_1_2" id="prop_1_2" class="form-control">
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
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <label for="prop_1_3">¿Cuántos goles habrá en el 2do tiempo?</label>
                                <select name="prop_1_3" id="prop_1_3" class="form-control">
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
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                    </section> {{--END match--}}

                    <section class="match">

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for=""><i class="flag mexico"></i>México</label>
                                </div>
                            </div>
                            <div class="col-xs-2 nopadding">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="result_2_a" id="result_2_a">
                                </div>
                            </div>
                            <div class="col-xs-2 nopadding">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="result_2_b" id="result_2_b">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for=""><i class="flag sue"></i>Suecia</label>
                                </div>
                            </div>
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <label for="prop_2_1">Primer anotador de México</label>
                                <select name="prop_2_1" id="prop_2_1" class="form-control">
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
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <label for="prop_2_2">¿Cuántos goles habrá en el 1er tiempo?</label>
                                <select name="prop_2_2" id="prop_2_2" class="form-control">
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
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                        <div class="row">

                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <label for="prop_2_3">¿Cuántos goles habrá en el 2do tiempo?</label>
                                <select name="prop_2_3" id="prop_2_3" class="form-control">
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
                            <div class="col-xs-1"></div>

                        </div> {{--END row--}}

                    </section> {{--END match--}}
                    @csrf
                    <input type="hidden" name="user" value="{{ $params['email'] }}">
                    <input type="hidden" name="agency" value="{{ $agency }}">
                    <input class="btn btn-default register-button" type="submit" value="Guardar">

                </form>

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
