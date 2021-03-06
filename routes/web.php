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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){
    Route::get('index','IndexController@index')->name('admin-index');
    Route::get('main','IndexController@main')->name('admin-main');
    Route::group(['prefix' => 'admin'],function(){
        Route::get('article','ArticleController@index')->name('article-index');
    });
});