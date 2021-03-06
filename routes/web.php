<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::domain('www.'.env('APP_DOMAIN'))->namespace('Index')->group(function () {
    Route::middleware('normal')->group(function () {
        //  首页
        Route::get('/', 'IndexController@Index');

        Route::get('/login', 'IndexController@login');
    });
});

Route::domain('admin.'.env('APP_DOMAIN'))->namespace('Admin')->group(function() {

    Route::middleware('normal')->group(function () {
        Route::get('/', 'IndexController@Index');
    });
});
