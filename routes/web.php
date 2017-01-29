<?php

Route::get('/', function () {
    return view('page');
});

Auth::routes();

Route::get('/home', [
    'as' => 'app.home',
    'uses' => 'HomeController@index'
]);

Route::get('auth/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', [
    'as' => 'app.home',
    'uses' => 'HomeController@index'
]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/projects', [
        'as' => 'app.projects.home',
        'uses' => 'ProjectsController@index'
    ]);

    Route::get('/projects/start', function() {
        return view('pages.start');
    })->name('app.projects.start');

    Route::get('/projects/create', function() {
        return view('projects.create');
    })->name('app.projects.create');

    Route::get('/projects/random', function() {
        return view('projects.random');
    })->name('app.projects.random');

    Route::get('/projects/browse', [
        'as'    => 'app.projects.browse',
        'uses'  => 'ProjectsController@index'
    ]);

    Route::get('/instruments/select', function() {
        return view('instruments.select');
    })->name('app.instruments.select');

    Route::get('/project/create', function() {
        return view('project.create');
    })->name('project.create');
    Route::get('/project/random', function() {
        return view('project.random');
    })->name('project.random');
    Route::get('/project/browse', function() {
        $projects = App\Models\Project::all();
        return view('project.browse')->with('projects', $projects);
    })->name('project.browse');
    Route::get('/instrument/select', function() {
        return view('instrument.select');
    })->name('instrument.select');
    Route::get('/project/compose/{progres?}', [
        'as' => 'project.compose',
        'uses' => 'ProjectsController@compose'
    ]);
});

