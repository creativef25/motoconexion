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
    return view('motoconexion.indexT');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('guardar-marca', 'MarcaController@guardarMarca')->name('guardarMarca');
Route::delete('eliminar-marca/{id}', 'MarcaController@eliminarMarca')->name('eliminarMarca');
Route::put('actualizar-marca/{id}', 'MarcaController@actualizarMarca')->name('actualizarMarca');

Route::post('guardar-categoria', 'CategoriaController@guardarCategoria')->name('guardarCategoria');
Route::delete('eliminar-categoria/{id}', 'CategoriaController@eliminarCategoria')->name('eliminarCategoria');
Route::put('actualizar-categoria/{id}', 'CategoriaController@actualizarCategoria')->name('actualizarCategoria');

Route::post('guardar-producto', 'ProductoController@guardarProducto')->name('guardarProducto');
Route::delete('eliminar-producto/{id}', 'ProductoController@eliminarProducto')->name('eliminarProducto');
Route::put('actualizar-producto/{id}', 'ProductoController@actualizarProducto')->name('actualizarProducto');

Route::post('guardar-imagen', 'ImageController@guardarImagen')->name('guardarImagen');
Route::delete('eliminar-imagen/{id}', 'ImageController@eliminarImagen')->name('eliminarImagen');
Route::put('actualizar-imagen/{id}', 'ImageController@actualizarImagen')->name('actualizarImagen');
