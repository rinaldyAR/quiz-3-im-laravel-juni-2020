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

Route::get('/', 'ArticleController@blank')->name('article.blank');
Route::get('/article', 'ArticleController@index')->name('article.article');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::delete('/article/{id}', 'ArticleController@delete')->name('article.delete');
Route::put('/article/{id}', 'ArticleController@update')->name('article.update');
Route::get('/article/{id}', 'ArticleController@detail')->name('article.show');
Route::post('/article', 'ArticleController@store');

Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id