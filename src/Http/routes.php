<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'lor08\Productso\Http\Controllers\PrsoCategoryController@show');
    Route::get('product/{slug}/{categoryid?}', 'lor08\Productso\Http\Controllers\PrsoProductController@show');
});
