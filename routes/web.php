<?php

Route::view('/', 'home');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/about', 'about');


Route::get('/customers', 'CustomersController@index')->name('customers.index');
Route::post('/customers', 'CustomersController@store')->name('customers.store');
Route::get('/customers/create', 'CustomersController@create')->name('customers.create');
Route::get('/customers/{customer}', 'CustomersController@show')->name('customers.show');
Route::patch('/customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::get('/customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::delete('/customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');


Auth::routes();


Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');

