<?php

Route::get('/', function () {
    
});

Auth::routes();

Route::get('/home', [
    'as' => 'app.home',
    'uses' => 'HomeController@index'
]);

Route::get('/project/start', function() {
    return view('pages.start');
})->name('project.start');
Route::get('/project/create', function() {
    return view('project.create');
})->name('project.create');
Route::get('/project/random', function() {
    return view('project.random');
})->name('project.random');
Route::get('/project/brouse', function() {
    return view('project.brouse');
})->name('project.brouse');
Route::get('/instrument/select', function() {
    return view('instrument.select');
})->name('instrument.select');

Route::get('auth/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{driver}/callback', 'Auth\LoginController@handleProviderCallback');
