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
/**
 * MODULO DE ROTAS
 */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('user', 'UserController');

// Route::get('/user/{id}/comments/{comments}', 'UserController@index')->where(['id' => '[0-9]+', 'comments' => '[a-zA-Z]+']);

// Route::get('/route/{id}', 'UserController@inspect')->where(['id' => '[0-9]+']);

// Route::prefix('admin')->group(function() {
//     Route::view('/form','form');
// });


// Route::name('posts.')->group(function(){
//     Route::get('/admin/posts/index', 'UserController@index')->name('index');
//     Route::get('/admin/posts', 'UserController@show')->name('show');
// });

// Route::middleware(['throttle:5,1'])->group(function(){
//     Route::view('/form/limit', 'welcome');
// });

// Route::namespace('Admin')->group(function(){
//     Route::get('/dashboard', 'DashboardController@index');
// });


// Route::group(['namespace' => 'Admin', 'prefix' => "admin", 'middleware' => ['throttle:4,1'], 'as' => 'admin.'], function() {
//     Route::resource('dashboard', 'DashboardController');
// });


/*
/**
 * MODULO DE MIGRATIONS
 */

Route::get('/posts/trashed', 'PostController@trashed')->name('posts.trashed');
Route::get('posts/{post}/restore', 'PostController@restore')->name('posts.restore');
Route::delete('posts/{post}/forceDelete', 'PostController@forceDelete')->name('posts.forceDelete');
Route::resource('posts', 'PostController');




