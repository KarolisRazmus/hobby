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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'people'], function () {

    Route::get('/', [
        'uses' => 'HBPeopleController@index'
    ]);

    Route::get('/generate/{count?}', [
        'uses' => 'HBDataGeneratorController@generatePeople'
    ]);

    Route::get('/form/', [
        'uses' => 'HBPeopleController@form'
    ]);

    Route::post('/form/', [
        'as' => 'create.person',
        'uses' => 'HBPeopleController@addPerson'
    ]);
});


Route::group(['prefix' => 'cities'], function () {

    Route::get('/', [
        'uses' => 'HBCitiesController@index'
    ]);

    Route::get('/generate/{count?}', [
        'uses' => 'HBDataGeneratorController@generateCities'
    ]);

    Route::get('/form/', [
        'uses' => 'HBCitiesController@form'
    ]);

    Route::post('/form/', [
        'as' => 'create.cities',
        'uses' => 'HBCitiesController@addCity'
    ]);
});


Route::group(['prefix' => 'hobbies'], function () {

    Route::get('/generate/{count?}', [
        'uses' => 'HBDataGeneratorController@generateHobbies'
    ]);

    Route::get('/', [
        'uses' => 'HBHobbiesController@index'
    ]);

    Route::get('/form/', [
        'uses' => 'HBHobbiesController@form'
    ]);

    Route::post('/form/', [
        'as' => 'create.hobbies',
        'uses' => 'HBHobbiesController@addHobby'
    ]);
});


Route::group(['prefix' => 'people_hobbies_connections'], function () {

    Route::get('/', [
        'uses' => 'HBPeopleHobbiesConnectionsController@index'
    ]);

    Route::get('/generate/{count?}', [
        'uses' => 'HBDataGeneratorController@generatePeopleHobbiesConnections'
    ]);

});





