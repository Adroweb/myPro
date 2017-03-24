<?php

Route::group(['middleware' => 'web'], function () {
    Route::group(array('module' => 'User', 'namespace' => 'App\Modules\User\Controllers'), function () {

        Route::group(['domain' => '{account}.' . env('APP_DOMAIN')], function () {
            // dd("dddddddddddddd");

            Route::get('/', function ($account) {
                dd($account);
                // dd($fileName);
                return view("User::stores");

            });
        });

    });
});


Route::group(array('module' => 'User', 'namespace' => 'App\Modules\User\Controllers'), function () {
    Route::group(['middleware' => 'web'], function () {

        //View Pages

        Route::get('/about', 'UserController@about');
        Route::resource('/services', 'UserController@services');
        Route::resource('/stores', 'UserController@stores');
        Route::resource('/store', 'UserController@store');
        Route::resource('/contact', 'UserController@contact');
        Route::resource('/signin', 'UserController@login');
        Route::resource('/signup', 'UserController@register');
        Route::resource('/udashboard', 'UserController@udashboard');


        //New User Registration
        Route::resource('/registerUser', 'UserController@registerUser');


        //Login Authentication
        Route::resource('/loginAuth', 'UserController@loginAuth');

        //social Login
        Route::get('auth/{provider}', 'SocialController@redirectToProvider');
        Route::resource('handleProviderCallback', 'SocialController@handleProviderCallback');
        Route::resource('/', 'UserController@index');

        //User Profile
        Route::resource('/myshoplife', 'UserController@myshoplife');
        Route::resource('/profile', 'UserController@profile');
        Route::resource('/myorder', 'UserController@myorder');
        Route::resource('/wishlist', 'UserController@wishlist');
        Route::resource('/setting', 'UserController@setting');
        Route::post('/checkupdate/{id}', 'UserController@userdetailscheckupdate');
        Route::post('/changepassword/{id}', 'UserController@changepassword');
        Route::post('/updateaddress/{id}', 'UserController@updateaddress');
        Route::post('/updateuserwallet/{id}', 'UserController@addmoneytowallet');
        Route::post('/sendmoneytowallet/{id}', 'UserController@sendmoney');

        //logout
        Route::resource('/userlogout', 'UserController@userlogout');

    });
});