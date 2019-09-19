<?php

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos','HomeController@productos')->name('productos');

Route::get('/cargar','HomeController@cargar')->name('cargar');


Route::get('/listado','HomeController@listado')->name('listado');


