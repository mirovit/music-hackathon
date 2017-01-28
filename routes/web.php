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
    Route::get('/projects/', [
        'as'    => 'project.home',
        'uses'  => 'ProjectsController@index'
    ]);
    Route::get('/project/create/', [
        'as'    => 'project.create',
        'uses'  => 'ProjectsController@create'
    ]);
    Route::get('/project/select-instrument/', [
        'as'    => 'project.select-instrument',
        'uses'  => 'ProjectsController@select-instrument'
    ]);
    Route::get('/project/compose/', [
        'as'    => 'project.compose',
        'uses'  => 'ProjectsController@compose'
    ]);
});

