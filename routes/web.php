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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/threads', ['as' => 'threads.listing', 'uses' => 'ThreadsController@index']);
Route::post('/threads', ['as' => 'threads.store', 'uses' => 'ThreadsController@store']);
Route::get('/threads/{thread}', ['as' => 'threads.show', 'uses' => 'ThreadsController@show']);
Route::post('/threads/{thread}/replies', ['as' => 'reply.save', 'uses' => 'RepliesController@store']);
