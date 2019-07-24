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
})->name('admin');

   Route::group(['prefix' => 'category'], function () {
       Route::get('/', 'CategoryController@index')->name('admin.category');
       Route::post('/', 'CategoryController@postCreateCategory')->name('admin.category.postCreate');

       Route::get('/update/{id}', 'CategoryController@getUpdate')->name('admin.category.getUpdate');
       Route::post('/update/{id}', 'CategoryController@postUpdate')->name('admin.category.postUpdate');

       Route::get('/delete/{id}', 'CategoryController@destroy')->name('admin.category.destroy');
   });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('admin.product');

        Route::get('/create', 'ProductController@getCreateProduct')->name('admin.product.getCreate');
        Route::post('/create', 'ProductController@postCreateProduct')->name('admin.product.postCreate');

        Route::get('/update/{id}', 'ProductController@getUpdate')->name('admin.product.getUpdate');
        Route::post('/update/{id}', 'ProductController@postUpdate')->name('admin.product.postUpdate');

        Route::get('/delete/{id}', 'ProductController@destroy')->name('admin.product.destroy');
});


});
