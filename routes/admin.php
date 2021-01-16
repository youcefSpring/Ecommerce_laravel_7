<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;

Route::group(
    [
        'prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

      

//prefix for all route admin
Route::group(['namespace' => 'Dashboard' , 'middleware'=> 'auth:admin', 'prefix'=>'admin'], function () {
    Route::get('','DashboardController@index')->name('admin.Dashboard');
    Route::get('/logout','LoginController@logout')->name('admin.logout');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('shipping-methods/{type}','SettingsController@editShippings')->name('editShippingSetting');
        Route::put('shipping-methods/{id}','SettingsController@updateShippings')->name('updateShippingSetting');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/','MainCategoriesController@index')->name('MainCategoriesList');

        Route::get('create','MainCategoriesController@create')->name('MainCategoriesCreate');

        Route::post('store','MainCategoriesController@store')->name('MainCategoriesStore');

        Route::get('edit/{id}','MainCategoriesController@edit')->name('MainCategoriesEdit');

        Route::put('update/{id}','MainCategoriesController@update')->name('MainCategoriesUpdate');

        Route::get('delete/{id}','MainCategoriesController@delete')->name('MainCategoriesDelete');

        Route::get('changeStatus','MainCategoriesController@changeStatus')->name('MainCategoriesChangeStatus');

        
    });
    Route::group(['prefix' => 'sub_categories'], function () {
        Route::get('/','SubCategoriesController@index')->name('SubCategoriesList');

        Route::get('create','SubCategoriesController@create')->name('SubCategoriesCreate');

        Route::post('store','SubCategoriesController@store')->name('SubCategoriesStore');

        Route::get('edit/{id}','SubCategoriesController@edit')->name('SubCategoriesEdit');

        Route::put('update/{id}','SubCategoriesController@update')->name('SubCategoriesUpdate');

        Route::get('delete/{id}','SubCategoriesController@delete')->name('SubCategoriesDelete');

        Route::get('changeStatus','SubCategoriesController@changeStatus')->name('SubCategoriesChangeStatus');

        
    });
    ###################### Categories Route ###############################
    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit','ProfileController@editProfile')->name('admin.editProfile');
        Route::put('update','ProfileController@updateProfile')->name('admin.updateProfile');
        
    });
    ##################### end Categories Routes ##########################
    
});

Route::group(['namespace' => 'Dashboard' ,'middleware'=> 'guest:admin','prefix'=>'admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.postLogin');
    
});

 });