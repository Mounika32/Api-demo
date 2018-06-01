<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//for displaying the form
Route::get('/detail', 'PostAPIController@index');
//for fetching values 
Route::get('/get_detail', 'PostAPIController@show');

//for saving values
Route::post('/save_details', 'PostAPIController@store');
