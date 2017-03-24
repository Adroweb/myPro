<?php

Route::group(array('module' => 'SuperAdmin', 'namespace' => 'App\Modules\SuperAdmin\Controllers'), function() {

    Route::resource('SuperAdmin', 'SuperAdminController');
    
});	