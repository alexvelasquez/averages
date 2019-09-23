<?php


/** ROUTES GENERAL */
Auth::routes();
Route::get('/', function () {
    if(empty(Auth::user())){
        return view('auth/login');
    }
    else{
        return view('products/products');
    }
});
Route::get('/home', 'HomeController@index')->name('home');

/** ROUTES PRODUCTS */
Route::get('/products','ProductsController@index')->name('products');
Route::get('/products/list','ProductsController@list')->name('list');

Route::post('/products/carga','ProductsController@carga')->name('carga');
Route::post('/products/edit/{id}','ProductsController@edit')->name('edit');
Route::get('/products/delete/{id}','ProductsController@delete')->name('delete');





/** ROUTES STATISTICS */
Route::get('/statistics','HomeController@statistics')->name('statistics');


