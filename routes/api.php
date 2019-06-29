<?php

use Illuminate\Http\Request;

Use App\Test;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::resource('tests22', 'TestRESTAPIController');
//Route::get('/tests22', 'TestRESTAPIController@index');
//Route::get('tests22', 'TestRESTAPIController@index');
//Route::get('tests', function() {
//  If the Content-Type and Accept headers are set to 'application/json',
//  this will return a JSON structure. This will be cleaned up later.
//    return Test::all();
//});
