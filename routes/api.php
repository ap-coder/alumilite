<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
});


Route::get('deployment', 'AwsHealthChecksController@deployed')->name('aws.deployed');