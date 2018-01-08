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
Route::group(['middleware' => ['web']], function () {

Route::get('/admin', ['uses' => 'AdminController@index','as' => 'admin.index']);

Route::get('/', ['uses' => 'HomeController@index']);

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+'); 

Route::get('blog/category/{slug}', ['uses' => 'BlogController@singleCategoryPost']);

Route::resource('posts','PostController');

// Categories
Route::resource('categories', 'CategoryController');

});


Auth::routes();

Route::get('/home', 'HomeController@hm')->name('home');
