<?php

Route::get('', ['as' => 'index.index', 'uses' => 'IndexController@index']);
Route::post('/mail', ['as' => 'index.mail', 'uses' => 'IndexController@postContato']);

Route::group(['prefix' => 'admin'], function () {

	Route::group(['prefix' => 'slider'], function () {
		Route::get('', ['as' => 'slider.index', 'uses' => 'SliderController@index']);
		Route::get('create', ['as' => 'slider.create', 'uses' => 'SliderController@create']);
		Route::post('store', ['as' => 'slider.store', 'uses' => 'SliderController@store']);
		Route::get('edit/{id}', ['as' => 'slider.edit', 'uses' => 'SliderController@edit']);
		Route::put('update/{id}', ['as' => 'slider.update', 'uses' => 'SliderController@update']);
		Route::get('delete/{id}', ['as' => 'slider.delete', 'uses' => 'SliderController@delete']);
	});
	Route::group(['prefix' => 'imprensa'], function () {
		Route::get('', ['as' => 'imprensa.index', 'uses' => 'ImprensaController@index']);
		Route::post('store', ['as' => 'imprensa.store', 'uses' => 'ImprensaController@store']);
	});
	Route::group(['prefix' => 'agenda'], function () {
		Route::get('', ['as' => 'agenda.index', 'uses' => 'AgendaController@index']);
		Route::get('create', ['as' => 'agenda.create', 'uses' => 'AgendaController@create']);
		Route::post('store', ['as' => 'agenda.store', 'uses' => 'AgendaController@store']);
		Route::get('edit/{id}', ['as' => 'agenda.edit', 'uses' => 'AgendaController@edit']);
		Route::put('update/{id}', ['as' => 'agenda.update', 'uses' => 'AgendaController@update']);
		Route::get('delete/{id}', ['as' => 'agenda.delete', 'uses' => 'AgendaController@delete']);
	});
	Route::group(['prefix' => 'about'], function () {
		Route::get('', ['as' => 'about.index', 'uses' => 'AboutController@index']);
		Route::post('store', ['as' => 'about.store', 'uses' => 'AboutController@store']);
	});
	Route::group(['prefix' => 'sponsor'], function () {
		Route::get('', ['as' => 'sponsor.index', 'uses' => 'SponsorController@index']);
		Route::get('create', ['as' => 'sponsor.create', 'uses' => 'SponsorController@create']);
		Route::post('store', ['as' => 'sponsor.store', 'uses' => 'SponsorController@store']);
		Route::get('edit/{id}', ['as' => 'sponsor.edit', 'uses' => 'SponsorController@edit']);
		Route::put('update/{id}', ['as' => 'sponsor.update', 'uses' => 'SponsorController@update']);
		Route::get('delete/{id}', ['as' => 'sponsor.delete', 'uses' => 'SponsorController@delete']);
	});
});