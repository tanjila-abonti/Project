<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'FrontController@index');
    


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('category')->group(function(){

Route::get('/save', 'CategoryController@index');
Route::post('/save','CategoryController@save');
Route::get('/manage', 'CategoryController@manage');
Route::get('/edit/{id}', 'CategoryController@edit');
Route::post('/edit', 'CategoryController@update');
Route::get ('/delete/{id}','CategoryController@delete');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/product/entry','ProductController@index');
Route::post('/product/entry','ProductController@save');
Route::get('/product/manage','ProductController@manage');