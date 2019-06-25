<?php

Route::view('/', 'home');
Route::view('/about', 'about');


Route::get('/customers', 'CustomersController@index');
Route::post('/customers', 'CustomersController@store');
Route::get('/customers/create', 'CustomersController@create');
Route::get('/customers/{customer}', 'CustomersController@show');
Route::patch('/customers/{customer}', 'CustomersController@update');
Route::get('/customers/{customer}/edit', 'CustomersController@edit');
Route::delete('/customers/{customer}', 'CustomersController@destroy');


//Route::resource('customers', 'CustomersController');


