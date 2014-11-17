<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//pasos del app
Route::get('/', ['as' => 'home', 'uses' => 'CCMController@index']);
Route::any('/step/one', ['as' => 'step.one', 'uses' => 'CCMController@step_one']);
Route::any('/step/two', ['as' => 'step.two', 'uses' => 'CCMController@step_two']);
Route::any('/step/three', ['as' => 'step.three', 'uses' => 'CCMController@step_three']);

//api
Route::any('api/step/one', ['as' => 'api.step.one', 'uses' => 'ApiStepsController@step_one']);

//punto de control
Route::get('flush', ['as' => 'flush', 'uses' => 'CCMController@flush']);