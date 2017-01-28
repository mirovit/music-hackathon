<?php

Route::get('/', function () {
    return view('page');
});

Auth::routes();

Route::get('/home', [
    'as'    => 'app.home',
    'uses'  => 'HomeController@index'
]);

Route::get('auth/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', [
    'as'    => 'app.home',
    'uses'  => 'HomeController@index'
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/project/create/', [
        'as'    => 'app.home',
        'uses'  => 'ProjectController@create'
    ]);
    Route::get('/project/select-instrument/', [
        'as'    => 'app.home',
        'uses'  => 'ProjectController@select-instrument'
    ]);
    Route::get('/project/compose/', [
        'as'    => 'app.home',
        'uses'  => 'ProjectController@compose'
    ]);
});

