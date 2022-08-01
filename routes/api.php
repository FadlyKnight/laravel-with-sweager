<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'prefix' => 'v1', 
    'as' => 'api.', 
    'namespace' => 'Api\V1', 
  ], function () {

    Route::post('/login', 'AuthController@login')->name('login');
    Route::post('/logout', 'AuthController@logout')->name('logout')->middleware(['auth:api']);
    Route::group([
        'prefix' => 'candidate',
        'as' => 'candidate.', 
        'middleware' => ['auth:api']
    ], function(){
        Route::group([
            'middleware'=> ['role:Senior HRD,HRD']
        ], function(){
            Route::get('/', 'CandidateController@index')->name('index');
            Route::get('/{candidate}', 'CandidateController@show')->name('show');
        });
        Route::group(['role:Senior HRD'], function(){
            Route::post('/', 'CandidateController@store')->name('store');
            Route::put('/{candidate}', 'CandidateController@update')->name('update');
            Route::delete('/{candidate}', 'CandidateController@destroy')->name('destroy');
        });
    });

  });