<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos','HomeController@productos')->name('productos');
Route::get('/cargar','HomeController@cargar')->name('cargar');


