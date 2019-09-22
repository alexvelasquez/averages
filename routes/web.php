<?php

Route::get('/', function () {
    if(empty(Auth::user())){
        return view('auth/login');
    }
    else{
        return view('products/products');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products','HomeController@products')->name('products');

Route::get('/statistics','HomeController@statistics')->name('statistics');


