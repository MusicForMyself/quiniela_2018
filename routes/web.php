<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\entryController;

    Route::get('/', function () {
        return abort('404');
    });
    
    Route::group([ 'prefix' => '{agency}' ], function () {
        
        Route::get('/', function ($agency) {
            return view('welcome')->with(compact('agency'));
        });

        Route::get('/rules', function ($agency) {
            return view('rules')->with(compact('agency'));
        });
        
        Route::get('/thanks', function ($agency) {
            return view('thanks')->with(compact('agency'));
        });

        Route::get('/enter', function ($agency) {
            return EntryController::showEnterForm($agency);
        });

        Route::post('/enter', function ($agency) {
            return EntryController::postProfile($agency);
        });

        Route::get('/fill-picks', function ($agency) {
            return view('fill-picks')->with(compact(['agency', 'email']));
        });
        
        Route::post('/fill-picks', function ($agency) {
            return EntryController::postEntry($agency);
        });

        Route::get('/results', function ($agency) {
            return view('results');
        });
        
    });
    
