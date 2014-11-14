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

Route::get('/', ['as' => 'home', 'uses' => 'CCMController@index']);
Route::get('/step/one', ['as' => 'step.one', 'uses' => 'CCMController@first_step']);
Route::any('/step/two', ['as' => 'step.two', 'uses' => 'CCMController@step_two']);