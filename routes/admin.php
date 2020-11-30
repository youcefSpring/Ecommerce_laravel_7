<?php

use Illuminate\Support\Facades\Route;

//prefix for all route admin
Route::group(['namespace' => 'Dashboard' , 'middleware'=> 'auth:admin'], function () {
    Route::get('','DashboardController@index')->name('admin.Dashboard');
    
});

Route::group(['namespace' => 'Dashboard' ,'middleware'=> 'guest:admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.postLogin');
    
});

