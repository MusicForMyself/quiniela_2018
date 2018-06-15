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
        return view('results');
    });
    
    Route::post('/participate', function () {
        return view('results');
    });
    
    Route::get('/results', function () {
        return view('results');
    });
