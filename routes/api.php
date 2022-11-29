<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/


Route::namespace('Api')->group(function () {
    Route::group(['middleware' => ['cors']], function() {
        Route::get('/get-blog','BlogController@index');
        Route::get('/blog','BlogController@allBlog');
        Route::get('/blog-detail/{id}','BlogController@blogdetail');

        Route::get('/get-about','CmsController@getabout');

        Route::post('/add-contact','ContactController@store');

        Route::get('/get-faq','FaqController@index');

        Route::get('/slider','SliderController@index');

        Route::post('/user-signup','UsersController@userSignUp');
        Route::post('/user-login','UsersController@userLogin');
        Route::get('/user/{email}','UsersController@userDetail');

        Route::get('/site-logo','SettingController@sitelogo');

    });

    /*------------- JWT TOKEN AUTHORIZED ROUTE-------------------*/
    Route::group(['middleware' => ['cors','jwt.verify']], function() {

    });
    /*-------------Without JWT TOKEN AUTHORIZED ROUTE-------------------*/
    });