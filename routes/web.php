<?php

use Illuminate\Support\Facades\Route;

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
// PANTALLA PORTADA
Route::get('/', function () {
    return view('welcome');
})->name('/');

// RUTAS DE AUTENTICACION
Auth::routes();

// INICIO PARA USUARIO AUTENTICADO
Route::get('/home', 'HomeController@index')->name('home');

//MODULO DE COLEGIOS
Route::get('modulos/colegios','Modulos\Colegios\ColegioController@index')->name('colegios'); //LISTA
Route::get('modulos/colegios/crear','Modulos\Colegios\ColegioController@create')->name('colegios.create'); //LISTA
Route::get('modulos/colegios/select','Modulos\Colegios\ColegioController@select')->name('colegios.select'); //<-OJO solo para testear
Route::get('modulos/colegios/{colegio}/editar','Modulos\Colegios\ColegioController@edit')->name('colegios.edit');
Route::patch('modulos/colegios/{colegio}','Modulos\Colegios\ColegioController@update')->name('colegios.update');
Route::delete('modulos/colegios/{colegio}','Modulos\Colegios\ColegioController@destroy')->name('colegios.destroy');
Route::post('modulos/colegios','Modulos\Colegios\ColegioController@store')->name('colegios.store');
Route::get('modulos/colegios/{colegio}','Modulos\Colegios\ColegioController@show')->name('colegios.show');//LISTA

//MODULO DE USUARIOS
Route::get('/usuarios/usuarios', function () {
    return view('modulos.usuarios.usuarios');
})->name('usuarios');

//MODULO DE INVENTARIO
//Route::get('/modulos/inventario/inventario', function () { return view('modulos.inventario.inventario'); })->name('inventario');

//ITEMS
Route::get('modulos/inventario/items','Modulos\Inventario\ItemController@index')->name('items.index');
Route::get('modulos/inventario/items/crear','Modulos\Inventario\ItemController@create')->name('items.create');
//Route::get('modulos/inventario/items/{item}/editar','Modulos\Inventario\ItemController@edit')->name('items.edit');
//Route::patch('modulos/inventario/items/{item}','Modulos\Inventario\ItemController@update')->name('items.update');
//Route::delete('modulos/inventario/items/{item}','Modulos\Inventario\ItemController@destroy')->name('items.destroy');
Route::post('modulos/inventario/items','Modulos\Inventario\ItemController@store')->name('items.store');
//Route::get('modulos/inventario/items/{item}','Modulos\Inventario\ItemController@show')->name('items.show');

//CATEGORIAS
Route::get('modulos/inventario/categorias','Modulos\Inventario\CategoriaController@index')->name('categorias.index');
//Route::get('modulos/inventario/categorias/crear','Modulos\Inventario\categorias\CategoriaController@create')->name('categorias.create');
//Route::get('modulos/inventario/categorias/{categoria}/editar','Modulos\Inventario\categorias\CategoriaController@edit')->name('categorias.edit');
//Route::patch('modulos/inventario/categorias/{categoria}','Modulos\Inventario\categorias\CategoriaController@update')->name('categorias.update');
//Route::delete('modulos/inventario/categorias/{categoria}','Modulos\Inventario\categorias\CategoriaController@destroy')->name('categorias.destroy');
//Route::post('modulos/inventario/categorias','Modulos\Inventario\categorias\CategoriaController@store')->name('categorias.store');
//Route::get('modulos/inventario/categorias/{categorias}','Modulos\Inventario\categorias\CategoriaController@show')->name('categorias.show');

//MODELOS
Route::prefix('modulos/inventario')->name('modelos.')->group(function(){
    Route::get('/modelos','Modulos\Inventario\ModeloController@index')->name('index');
    Route::get('/modelos/crear','Modulos\Inventario\ModeloController@create')->name('create');
    Route::get('/modelos/{modelo}/editar','Modulos\Inventario\ModeloController@edit')->name('edit');
    Route::patch('/modelos/{modelo}','Modulos\Inventario\ModeloController@update')->name('update');
    Route::delete('/modelos/{modelo}','Modulos\Inventario\ModeloController@destroy')->name('destroy');
    Route::post('/modelos','Modulos\Inventario\ModeloController@store')->name('store');
    Route::get('/modelos/{modelo}','Modulos\Inventario\ModeloController@show')->name('show');
});

//MODULO DE RESERVAS
Route::get('/reservas', function () {
    return view('modulos.reservas');
})->name('reservas');

//MODULO DE PRESTAMOS
Route::get('/prestamos', function () {
    return view('modulos.prestamos');
})->name('prestamos');

//MODULO DE REPORTES
Route::get('/reportes', function () {
    return view('modulos.reportes');
})->name('reportes');

