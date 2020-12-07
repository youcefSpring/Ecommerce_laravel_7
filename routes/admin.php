<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;

// Route::group(
//     [
//         'prefix' => 'LaravelLocalization::setLocale()',
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){ 

      

//prefix for all route admin
Route::group(['namespace' => 'Dashboard' , 'middleware'=> 'auth:admin', 'prefix'=>'admin'], function () {
    Route::get('','DashboardController@index')->name('admin.Dashboard');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('shipping-methods/{type}','SettingsController@editShippings')->name('editShippingSetting');
        Route::put('shipping-methods/{id}','SettingsController@updateShippings')->name('updateShippingSetting');
    });
    
});

Route::group(['namespace' => 'Dashboard' ,'middleware'=> 'guest:admin','prefix'=>'admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.postLogin');
    
});

// });