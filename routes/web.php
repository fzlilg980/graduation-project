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

    });
});

Route::domain('admin.'.env('APP_DOMAIN'))->namespace('Admin')->group(function() {

    Route::middleware('normal')->group(function () {
        Route::get('/', 'IndexController@Index');
    });
});

// Route::any('/{controller}/{action}', function ($controller, $action) {
//     $uses = $controller . 'Controller@' . $action;
//     Route::any($controller, ['uses' => $uses, 'as' => 'auto']);
//     return redirect()->route('auto');
// });

// Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin.auth'], function () {
//     // 文章管理
//     Route::group(['prefix' => 'article'], function () {
//         // 文章列表
//         Route::get('index', 'ArticleController@index');
//         // 发布文章
//         Route::get('create', 'ArticleController@create');
//         // ...
//     });

//     // 分类管理
//     Route::group(['prefix' => 'category'], function () {
//         // 分类列表
//         Route::get('index', 'CategoryController@index');
//         // 添加分类
//         Route::get('create', 'CategoryController@create');
//     });
// });
