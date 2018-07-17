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

// default auth endpoints
Auth::routes();

// wrap contact CRUD in authåå check
Route::group(['middleware' => 'auth'], function () {

	Route::prefix('contacts')->namespace('Contacts')->group(function() {
	    Route::prefix('/')->group(function() {
	    	// list contacts
		    Route::get('', 'ContactController@index')->name('contacts.index');
		    Route::get('create', 'ContactController@create')->name('contacts.create');
		    //Route::get('show', 'ContactController@show')->name('contacts.show');
		    Route::get('{id}/edit', 'ContactController@edit')->name('contacts.edit');
		   	Route::put('store', 'ContactController@store')->name('contacts.store');
		   	Route::post('{id}/update', 'ContactController@update')->name('contacts.update');
		   	Route::delete('destroy', 'ContactController@destroy')->name('contacts.destroy');
		});
	});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
