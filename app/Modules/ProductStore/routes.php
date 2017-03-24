<?php

Route::group(array('module' => 'ProductStore', 'namespace' => 'App\Modules\ProductStore\Controllers'), function() {

    Route::resource('ProductStore', 'ProductStoreController');
    
});	