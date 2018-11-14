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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home'); //Ruta a home
Route::get('/proveedor', 'HomeController@proveedores'); //Ruta a vista proveedor

Route::post('/proveedor', 'HomeController@enviap'); //Enviar formulario de proveedor
Route::post('/reserva', 'HomeController@reservar');
Route::post('/contacto', 'HomeController@contacto');

//ADMINISTRADOR
Route::get('/admin', 'AdminController@index');

//RUTAS ADMINISTRADOR PARA PROVEEDOR
Route::get('/admin/eliminar/proveedor/{id}', 'AdminController@eliminarProveedor');
Route::get('/admin/editar/proveedor/{id}', 'AdminController@editarProveedor');
Route::post('/admin/guardar/proveedor/{id}', 'AdminController@guardarProveedor');

//RUTAS ADMINISTRADOR PARA RESERVACION
Route::get('/admin/eliminar/reservacion/{id}', 'AdminController@eliminarReservacion');
Route::get('/admin/editar/reservacion/{id}', 'AdminController@editarReservacion');
Route::post('/admin/guardar/reservacion/{id}', 'AdminController@guardarReservacion');

//RUTAS ADMINISTRADOR PARA CONTACTO
Route::get('/admin/eliminar/contacto/{id}', 'AdminController@eliminarContacto');
Route::get('/admin/editar/contacto/{id}', 'AdminController@editarContacto');
Route::post('/admin/guardar/contacto/{id}', 'AdminController@guardarContacto');