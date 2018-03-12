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

Route::get('/', 'PagesController@index');
Route::get('/articles',[
  'as' => 'article.index', 
   'uses' => 'ArticlesController@index']);
Route::get('/articles/create',[
    'as' => 'article.create',
    'uses' => 'PagesController@create'
]);

Route::post('articles/store',[
	'as'=> 'article.store',
	'uses' => 'PagesController@store'
]);
Route::get('articles/{id}/edit',[
	'as' => 'article.edit',
	'uses' => 'PagesController@edit'
]);
Route::put ('articles/{id}',[
	'as' => 'article.update',
	'uses' => 'PagesController@update'
]);

Route::get('/articles/{id}',[ 
	'as' => 'article.show',
	'uses'=>'PagesController@show']);
Route::delete('/articles/{id}',[
	'as' => 'article.delete',
	'uses' => 'PagesController@delete'
]);
