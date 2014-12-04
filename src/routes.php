<?php

Route::group(array('namespace'=>'Stevebauman\Classifieds\Controllers'), function(){
    
    Route::get('', array(
        'as' => 'classifieds.home.index', 
        'uses' => 'HomeController@getIndex'
    ));
    
    Route::group(array('prefix'=>'auth'), function(){
        
        Route::group(array('prefix'=>'login'), function(){
            
            Route::get('/', array(
                'as' => 'classifieds.auth.index',
                'uses' => 'AuthController@getIndex'
            ));
        
            Route::get('facebook', array(
                'as' => 'classifieds.auth.login.facebook',
                'uses' => 'AuthController@getFacebookLogin'
            ));
            
        });
        
        Route::get('logout', array(
            'as' => 'classifieds.auth.logout',
            'uses' => 'AuthController@getLogout'
        ));
        
    });
    
    Route::group(array('prefix'=>'transfer'), function(){
        
        Route::get('', array(
            'as' => 'classifieds.transfer.index',
            'uses' => 'TransferController@getIndex'
        ));
        
        Route::post('', array(
            'as' => 'classifieds.transfer.index',
            'uses' => 'TransferController@postIndex'
        ));
        
    });
    
    Route::group(array('prefix'=>'admin', 'namespace'=>'Admin'), function(){
        
        Route::get('', array(
            'as' => 'classifieds.admin.dashboard.index',
            'uses' => 'DashboardController@getIndex'
        ));
        
    });
    
});

