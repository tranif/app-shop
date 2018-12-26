<?php

Route::get('/', 'TestController@welcome');

Route::get('/prueba',function(){
    return 'Soy una ruta de prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
    Route::get('/products','ProductController@index');   // listado
    Route::get('/products/create','ProductController@create');     // crear
    Route::post('/products','ProductController@store');     // guardar
    Route::get('/products/{id}/edit','ProductController@edit');
    Route::post('/products/{id}/edit','ProductController@update');
    // Route::get('/admin/products/{id}/delete','ProductController@destroy');
    Route::delete('/products/{id}','ProductController@destroy');
});