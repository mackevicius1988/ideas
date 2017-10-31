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

Route::get('', 'PostsController@index');
Route::get('/find/{categoryIds}/{priceFrom}/{priceTo}/{query}/{order}', 'PostsController@find');
Route::get('/{postId}', 'PostsController@post');
Route::get('get/memory', 'PostsController@memory');
Route::get('memories/{postIds}', 'PostsController@memories');