<?php

Route::group(['middleware' => 'web', 'prefix' => 'guardian', 'namespace' => 'Modules\Guardian\Http\Controllers'], function()
{
    Route::get('/', 'GuardianController@index');
});
