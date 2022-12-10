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
    return redirect()->route('principal');
});

Route::bind('producto', function($producto){
    return App\Producto::where('id', $producto)->first();
});

Auth::routes();

Route::get('', 'CarritoController@principal')->name('principal');
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

Route::post('guardar-datos', 'DatoController@guardarDatos')->name('guardarDatos');

Route::get('add/carrito/{producto}', 'CarritoController@add_producto')->name('addProduc');
Route::get('show/carrito', 'CarritoController@show_carrito')->name('showCarrito');
Route::get('eliminar/productos/{producto}', 'CarritoController@eliminar_producto')->name('eliminarProduc');
Route::get('actualizar/cantidad/{producto?}/{cantidad?}', 'CarritoController@actualizar_cantidad')->name('actualizarCantidad');

Route::get('checkout', 'CarritoController@checkout')->name('checkout');

Route::get('eliminarTodo', 'CarritoController@eliminarTodo')->name('eliminarTodo');
