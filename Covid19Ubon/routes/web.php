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

Route::get('/','ApiController@get_api');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/covid19', function()
{
    return view('covid19');
});

Route::get('/home','ApiController@get_api');
Route::get('/casesum','ApiController@get_api_case_sum');

// Route::get('/home', 'Admin.PostsController');

Route::resource('admin/posts', 'Admin\\PostsController');

