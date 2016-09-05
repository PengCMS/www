<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    return 'okk';
});

Route::group([
    'prefix' => 'mobile',
], function () {
    Route::get('index', function () {
        return view('mobile.index');
    });
    Route::get('page', function () {
        return view('mobile.page2');
    });
});

Route::get('vue/index', function () {
    return view('vue.index');
});
