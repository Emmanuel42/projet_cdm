<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Accueil
Route::get('/', 'EquipeController@index');

// Route::get('/', function () {
//     return view('accueil');
// });

Route::resource('enigmes', 'EnigmeController');
Route::resource('equipes', 'EquipeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('enigme', 'EnigmeController@create');
Route::post('enigme', 'EnigmeController@store');




//route équipe bleue
Route::post('/obsbl', 'EnigmeController@store');

    Route::post('/coobl', 'EnigmeController@validE2');

        Route::post('/refbl', 'EnigmeController@validE3');
            
            Route::post('/inibl', 'EnigmeController@validE4');

//                 Route::post('/vidbl', function(){
//                     return view('ebl5');
//                 });
    
//route équipe rouge
Route::post('/obsro', function(){
     return view('ero1');
});
    Route::post('/cooro', function(){
        return view('ero2');
    });
        Route::post('/refro', function(){
            return view('ero3');
        });
            Route::post('/iniro', function(){
                return view('ero4');
            });
                Route::post('/vidro', function(){
                    return view('ero5');
                });

//route équipe verte
Route::post('/obsve', function(){
     return view('eve1');
});
    Route::post('/coove', function(){
        return view('eve2');
    });
        Route::post('/refve', function(){
            return view('eve3');
        });
            Route::post('/inive', function(){
                return view('eve4');
            });
                Route::post('/vidve', function(){
                    return view('eve5');
                });

//route équipe jaune
Route::post('/obsja', function(){
     return view('eja1');
});
    Route::post('/cooja', function(){
        return view('eja2');
    });
        Route::post('/refja', function(){
            return view('eja3');
        });
            Route::post('/inija', function(){
                return view('eja4');
            });
                Route::post('/vidja', function(){
                    return view('eja5');
                });

//route équipe violette
Route::post('/obsvi', function(){
     return view('evi1');
});
    Route::post('/coovi', function(){
        return view('evi2');
    });
        Route::post('/refvi', function(){
            return view('evi3');
        });
            Route::post('/inivi', function(){
                return view('evi4');
            });
                Route::post('/vidvi', function(){
                    return view('evi5');
                });
    
    
// Route::get('enigmes', 'EnigmeController@create');
// Route::post('enigmes', 'EnigmeController@store');
