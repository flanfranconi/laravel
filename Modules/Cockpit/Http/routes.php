<?php

Route::group(['domain' => 'cockpit-remul.swissbrain.ch' ,'middleware' => 'web', 'namespace' => 'Modules\Cockpit\Http\Controllers'], function()
{
    Route::get('/test', 'CockpitController@index');
    Route::get('/', 'CockpitController@index');
});