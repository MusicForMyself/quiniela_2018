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

                <form id="entryForm" class="formComponent" action="{{ url("{$agency}/fill-picks") }}" method="POST">

                    <section class="match">

                        <div class="row">

                            <div class="col-xs-3">
                                <label for="">México</label>
                                <i class="flag mexico"></i>
                            </div>
                            <div class="col-xs-3">
                                <input type="checkbox" name="result_1" value="mex">
                            </div>
                            <div class="col-xs-3">
                                <label for="">Corea</label>
                                <i class="flag mexico"></i>
                            </div>
                            <div class="col-xs-3">
                                <input type="checkbox" name="result_1" value="cor">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12">
                                <label for="">¿Cuántos goles habrá en el 1er tiempo?</label>
                                <select name="prop_1_1" id="prop_1_1">
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

                        </div>

                        <div class="row">

                            <div class="col-xs-12">
                                <label for="">¿Cuántos goles habrá en el 2o tiempo?</label>
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

                        </div>

                    </section>

                    <section class="match">

                        <div class="row">

                            <div class="col-xs-3">
                                <label for="">México</label>
                                <i class="flag mexico"></i>
                            </div>
                            <div class="col-xs-3">
                                <input type="checkbox" name="result_2" value="mex">
                            </div>
                            <div class="col-xs-3">
                                <label for="">Suecia</label>
                                <i class="flag mexico"></i>
                            </div>
                            <div class="col-xs-3">
                                <input type="checkbox" name="result_2" value="sue">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12">
                                <label for="">¿Cuántos goles habrá en el 1er tiempo?</label>
                                <select name="prop_2_1" id="prop_2_1">
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

                        </div>

                        <div class="row">

                            <div class="col-xs-12">

                                <label for="">¿Cuántos goles habrá en el 2o tiempo?</label>
                                <select name="prop_2_2" id="prop_2_2">
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

                        </div>

                    </section>

                    <input type="hidden" name="user" id="user" value="{{ $params['email'] }}">
                    @csrf
                    <input type="submit" value="¡Guardar!" class="btn btn-default register-button">

                </form>


                @isset($agency)
                    <div class="ornato-footer logo-{{ $agency }}"></div>
                @endisset

            </div>

        </div>

    </body>

    <link rel="stylesheet" href="{{ mix("/css/app.min.css") }}">
    <script type="application/javascript" src="{{ mix("/js/app.min.js") }}"></script>

</html>
