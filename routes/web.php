<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('shares', 'ShareController');
Route::resource('tests', 'TestController');
