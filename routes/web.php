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
Route::get('/find', 'PostsController@find');
Route::get('/{postId}', 'PostsController@post');
Route::get('memories/{postIds}', 'PostsController@memories');
Route::get('v1/about', 'PostsController@about');