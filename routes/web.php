<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/thank-you', function () {
        return view('thanks');
    });
    
    Route::get('/enter', function () {
        return view('enter');
    });
    
     Route::post('/enter', function () {
        return;
    });
    
    Route::get('/fill-picks', function () {
        return view('quiniela');
    });
    
    Route::get('/results', function () {
        return view('results');
    });
