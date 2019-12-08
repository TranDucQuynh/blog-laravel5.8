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

// User Route
Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index');

    Route::get('post', 'PostController@index')->name('post');
});


Route::group(['namespace' => 'Admin'], function () {

    Route::prefix('admin')->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');

        Route::resource('post', 'PostController');    // Post Routes
        Route::resource('tag', 'TagController');  // Tag Routes
        Route::resource('category', 'CategoryController');    // Category Routes
        Route::resource('user', 'UserController');    // User Routes
    });
});
