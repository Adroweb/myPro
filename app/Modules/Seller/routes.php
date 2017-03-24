<?php

Route::group(['middleware' => 'web'], function () {
    Route::group(array('module' => 'Seller', 'namespace' => 'App\Modules\Seller\Controllers'), function () {


        //seller registration
        Route::resource('/registerSeller', 'SellerController@registerSeller');
        Route::resource('/newSeller', 'SellerController@newSeller');
        Route::resource('/accountDetails', 'SellerController@accountDetails');
        Route::resource('/accountDetailsRegister', 'SellerController@accountDetailsRegister');

        //seller Auth
        Route::resource('/sellerlogin', 'SellerController@sellerlogin');
        Route::resource('/sellerAuth', 'SellerController@sellerAuth');

        //page
        Route::resource('/sellerdashboard', 'SellerController@maindashboard');
        Route::resource('/shop', 'SellerController@sellershop');
        Route::resource('/products', 'SellerController@productlist');

        Route::post('/editproduct/{id}', 'SellerController@ProductEdit');
        Route::post('/getproduct/{id}', 'SellerController@GetProduct');
        Route::resource('/upload', 'SellerController@uploade');
        Route::resource('/Addproduct', 'SellerController@uploadproduct');

        Route::resource('/wallet', 'SellerController@sellerwallet');
        Route::post('/addmoneytowallet/{id}', 'SellerController@addmoneytowallet');
        Route::post('/sendmoneytofrnd/{id}', 'SellerController@sendmoneytofrnd');
        Route::post('/editaddress/{id}', 'SellerController@updateselleraddress');
        Route::post('/changesellerpassword/{id}', 'SellerController@changesellerpassword');

        Route::resource('/mailbox', 'SellerController@mailbox');
        Route::resource('/marketing', 'SellerController@marketing');
        Route::resource('/sales_growth', 'SellerController@salesGrowth');
        Route::resource('/customers_review', 'SellerController@customerReview');
        Route::resource('/settings', 'SellerController@settings');
        Route::resource('/sellerprofile', 'SellerController@sellerprofile');
        Route::resource('/myaccount', 'SellerController@myaccount');



        //shop
        Route::post('/createnewshop', 'SellerController@createnewshop');
        Route::post('/editshopdetails/{id}', 'SellerController@editshopdetails');
        Route::resource('/shopdelete', 'SellerController@shopdelete');

        //colors
        Route::post('/themecolor/{id}', 'SellerController@themecolor');

        //logout
        Route::resource('/sellerlogout', 'SellerController@sellerlogout');

    });
});