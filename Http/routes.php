<?php

Route::group(['middleware' => 'api', 'prefix' => 'api/v1', 'namespace' => 'Modules\Guardian\Http\Controllers'], function()
{

    Route::group(['prefix' => 'students'], function () {
        Route::apiResource('/{student}/guardian', 'GuardianController');
        Route::apiResource('/{student}/emergency', 'EmergencyController');
    });

});
