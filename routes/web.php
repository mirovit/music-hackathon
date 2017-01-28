<?php

Route::get('/', function () {
});

Auth::routes();

Route::get('/home', [
    'as'    => 'app.home',
    'uses'  => 'HomeController@index'
]);

Route::get('auth/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{driver}/callback', 'Auth\LoginController@handleProviderCallback');