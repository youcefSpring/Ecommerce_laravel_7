<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    // return view('layouts.admin');

    $categry=\App\Models\Category::find(5);
    $categry->makeVisible(['translations']);
    return ($categry);
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


