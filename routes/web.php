<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);
Route::group([ 
    'prefix' => 'manage',
    'as' => 'manage.',
    'middleware' => ['auth'] 
], function(){
    
    Route::group([
        'middleware'=> ['role:Senior HRD,HRD'],
        'prefix' => 'candidate',
        'as' => 'candidate.',
    ], function(){
        Route::get('/', 'CandidateController@index')->name('index');
        Route::get('/show/{candidate}', 'CandidateController@show')->name('show');
        Route::group([
            'middleware'=> ['role:Senior HRD'],
        ], function(){
            Route::get('/create', 'CandidateController@create')->name('create');
            Route::get('/edit/{candidate}', 'CandidateController@edit')->name('edit');
            Route::post('/', 'CandidateController@store')->name('store');
            Route::put('/{candidate}', 'CandidateController@update')->name('update');
            Route::delete('/{candidate}', 'CandidateController@destroy')->name('destroy');
        });
    });

});
