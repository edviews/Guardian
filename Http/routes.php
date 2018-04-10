<?php

Route::group(['middleware' => 'api', 'prefix' => 'api/v1/guardian', 'namespace' => 'Modules\Guardian\Http\Controllers'], function()
{
    Route::get('/', 'GuardianController@index');
});
