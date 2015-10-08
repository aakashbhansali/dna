<?php

/* View composer option. Currently using @inject into
 * partials/form.blade.php
 */
//View::composer('indexes', function($view) {
//    $view->with('indexes', app('App\Indexes'));
//});

Route::get('/', 'PageController@index');
Route::resource('samples', 'SamplesController');
Route::resource('batches', 'BatchesController');
Route::post('runs/setStatus', 'RunsController@setStatus');
Route::resource('runs', 'RunsController');
Route::resource('chemistry', 'ChemistryController');
Route::resource('project_groups', 'ProjectGroupController');
Route::resource('adaptor', 'AdaptorController');
Route::resource('assay', 'AssayController');

Route::resource('workflow', 'WorkFlowController');
Route::resource('instrument', 'InstrumentController');
Route::resource('application', 'ApplicationController');

Route::resource('sampleRuns', 'SampleRunController');
Route::resource('runDetails', 'RunDetailsController');

Route::get('/batchesRunsRemaining', 'SampleRunController@batchesRunsRemaining');
Route::get('/samplesRunsRemaining', 'SampleRunController@samplesRunsRemaining');

// To close registrations
Route::get('/auth/register', 'PageController@closed');

Route::resource('about', 'AboutController');

Route::controllers([
    'auth'      => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController',
]);

Route::post('import/validateFile', 'ImportSampleController@validateFile');
Route::resource('import', 'ImportSampleController');
