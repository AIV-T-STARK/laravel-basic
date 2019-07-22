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

Route::group(['namespace' => 'Admin',  'prefix' => 'admin'], function () {
    Route::group(['prefix' => 'login'], function() {

        Route::get('/' , 'LoginController@getLogin')->name('admin.login.getLogin');
        Route::post('/' , 'LoginController@postLogin')->name('admin.login.postLogin');

    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'CheckLogin'], function () {
   Route::get('/', function () {
       return view('admin.index');
   });
});
