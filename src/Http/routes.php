<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'lor08\Productso\Http\Controllers\PrsoCategoryController@show');
});
