<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!


|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Usuarios
Route::get('/users', 'App\Http\Controllers\UserController@index');//mostrar registros
Route::post('/users', 'App\Http\Controllers\UserController@store');//guardar registros
Route::put('/users/{id}', 'App\Http\Controllers\UserController@update');//actualizar registros
Route::delete('/users/{id}', 'App\Http\Controllers\UserController@destroy');//eliminar registros

// Bebidas
Route::get('/bebidas', 'App\Http\Controllers\BebidaController@index');//mostrar registros
Route::post('/bebidas', 'App\Http\Controllers\BebidaController@store');//guardar registros
Route::put('/bebidas/{id}', 'App\Http\Controllers\BebidaController@update');//actualizar registros
Route::delete('/bebidas/{id}', 'App\Http\Controllers\BebidaController@destroy');//eliminar registros

// Platos
Route::get('/platos', 'App\Http\Controllers\PlatoController@index');//mostrar registros
Route::post('/platos', 'App\Http\Controllers\PlatoController@store');//guardar registros
Route::put('/platos/{id}', 'App\Http\Controllers\PlatoController@update');//actualizar registros
Route::delete('/platos/{id}', 'App\Http\Controllers\PlatoController@destroy');//eliminar registros

// Categorias
Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index');//mostrar registros
Route::post('/categorias', 'App\Http\Controllers\CategoriaController@store');//guardar registros
Route::put('/categorias/{id}', 'App\Http\Controllers\CategoriaController@update');//actualizar registros
Route::delete('/categorias/{id}', 'App\Http\Controllers\CategoriaController@destroy');//eliminar registros

// Tipos
Route::get('/tipos', 'App\Http\Controllers\TipoController@index');//mostrar registros
Route::post('/tipos', 'App\Http\Controllers\TipoController@store');//guardar registros
Route::put('/tipos/{id}', 'App\Http\Controllers\TipoController@update');//actualizar registros
Route::delete('/tipos/{id}', 'App\Http\Controllers\TipoController@destroy');//eliminar registros

// Repartidores
Route::get('/repartidores', 'App\Http\Controllers\RepartidorController@index');//mostrar registros
Route::post('/repartidores', 'App\Http\Controllers\RepartidorController@store');//guardar registros
Route::put('/repartidores/{id}', 'App\Http\Controllers\RepartidorController@update');//actualizar registros
Route::delete('/repartidores/{id}', 'App\Http\Controllers\RepartidorController@destroy');//eliminar registros

// Vehiculos
Route::get('/vehiculos', 'App\Http\Controllers\VehiculoController@index');//mostrar registros
Route::post('/vehiculos', 'App\Http\Controllers\VehiculoController@store');//guardar registros
Route::put('/vehiculos/{id}', 'App\Http\Controllers\VehiculoController@update');//actualizar registros
Route::delete('/vehiculos/{id}', 'App\Http\Controllers\VehiculoController@destroy');//eliminar registros

// Inventarios
Route::get('/inventarios', 'App\Http\Controllers\InventarioController@index');//mostrar registros
Route::post('/inventarios', 'App\Http\Controllers\InventarioController@store');//guardar registros
Route::put('/inventarios/{id}', 'App\Http\Controllers\InventarioController@update');//actualizar registros
Route::delete('/inventarios/{id}', 'App\Http\Controllers\InventarioController@destroy');//eliminar registros

// Clientes
Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');//mostrar registros
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store');//guardar registros
Route::put('/clientes/{id}', 'App\Http\Controllers\ClienteController@update');//actualizar registros
Route::delete('/clientes/{id}', 'App\Http\Controllers\ClienteController@destroy');//eliminar registros

// Proveedores
Route::get('/proveedores', 'App\Http\Controllers\ProveedorController@index');//mostrar registros
Route::post('/proveedores', 'App\Http\Controllers\ProveedorController@store');//guardar registros
Route::put('/proveedores/{id}', 'App\Http\Controllers\ProveedorController@update');//actualizar registros
Route::delete('/proveedores/{id}', 'App\Http\Controllers\ProveedorController@destroy');//eliminar registros

// Locales
Route::get('/locales', 'App\Http\Controllers\LocalController@index');//mostrar registros
Route::post('/locales', 'App\Http\Controllers\LocalController@store');//guardar registros
Route::put('/locales/{id}', 'App\Http\Controllers\LocalController@update');//actualizar registros
Route::delete('/locales/{id}', 'App\Http\Controllers\LocalController@destroy');//eliminar registros

// Locales
Route::get('/ordenes', 'App\Http\Controllers\OrdenController@index');//mostrar registros
Route::post('/ordenes', 'App\Http\Controllers\OrdenController@store');//guardar registros
Route::put('/ordenes/{id}', 'App\Http\Controllers\OrdenController@update');//actualizar registros
Route::delete('/ordenes/{id}', 'App\Http\Controllers\OrdenController@destroy');//eliminar registros

// OrdenesInventarios
Route::get('/ordenes_inventarios', 'App\Http\Controllers\OrdenInventarioController@index');//mostrar registros
Route::post('/ordenes_inventarios', 'App\Http\Controllers\OrdenInventarioController@store');//guardar registros
Route::put('/ordenes_inventarios/{id}', 'App\Http\Controllers\OrdenInventarioController@update');//actualizar registros
Route::delete('/ordenes_inventarios/{id}', 'App\Http\Controllers\OrdenInventarioController@destroy');//eliminar registros

// notacompras
Route::get('/notacompras', 'App\Http\Controllers\NotaCompraController@index');//mostrar registros
Route::post('/notacompras', 'App\Http\Controllers\NotaCompraController@store');//guardar registros
Route::put('/notacompras/{id}', 'App\Http\Controllers\NotaCompraController@update');//actualizar registros
Route::delete('/notacompras/{id}', 'App\Http\Controllers\NotaCompraController@destroy');//eliminar registros

// detallecompras
Route::get('/detallecompras', 'App\Http\Controllers\DetalleCompraController@index');//mostrar registros
Route::post('/detallecompras', 'App\Http\Controllers\DetalleCompraController@store');//guardar registros
Route::put('/detallecompras/{id}', 'App\Http\Controllers\DetalleCompraController@update');//actualizar registros
Route::delete('/detallecompras/{id}', 'App\Http\Controllers\DetalleCompraController@destroy');//eliminar registros

// notaventas
Route::get('/notaventas', 'App\Http\Controllers\NotaVentaController@index');//mostrar registros
Route::post('/notaventas', 'App\Http\Controllers\NotaVentaController@store');//guardar registros
Route::put('/notaventas/{id}', 'App\Http\Controllers\NotaVentaController@update');//actualizar registros
Route::delete('/notaventas/{id}', 'App\Http\Controllers\NotaVentaController@destroy');//eliminar registros

// detalleventas
Route::get('/detalleventas', 'App\Http\Controllers\DetalleVentaController@index');//mostrar registros
Route::post('/detalleventas', 'App\Http\Controllers\DetalleVentaController@store');//guardar registros
Route::put('/detalleventas/{id}', 'App\Http\Controllers\DetalleVentaController@update');//actualizar registros
Route::delete('/detalleventas/{id}', 'App\Http\Controllers\DetalleVentaController@destroy');//eliminar registros

// ubicaciones
Route::get('/ubicaciones', 'App\Http\Controllers\UbicacionController@index');//mostrar registros
Route::post('/ubicaciones', 'App\Http\Controllers\UbicacionController@store');//guardar registros
Route::put('/ubicaciones/{id}', 'App\Http\Controllers\UbicacionController@update');//actualizar registros
Route::delete('/ubicaciones/{id}', 'App\Http\Controllers\UbicacionController@destroy');//eliminar registros

// pedidos
Route::get('/pedidos', 'App\Http\Controllers\PedidoController@index');//mostrar registros
Route::post('/pedidos', 'App\Http\Controllers\PedidoController@store');//guardar registros
Route::put('/pedidos/{id}', 'App\Http\Controllers\PedidoController@update');//actualizar registros
Route::delete('/pedidos/{id}', 'App\Http\Controllers\PedidoController@destroy');//eliminar registros

// detallepedidos
Route::get('/detallepedidos', 'App\Http\Controllers\DetallePedidoController@index');//mostrar registros
Route::post('/detallepedidos', 'App\Http\Controllers\DetallePedidoController@store');//guardar registros
Route::put('/detallepedidos/{id}', 'App\Http\Controllers\DetallePedidoController@update');//actualizar registros
Route::delete('/detallepedidos/{id}', 'App\Http\Controllers\DetallePedidoController@destroy');//eliminar registros

