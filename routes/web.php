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
Route::get('/modulos/inventario/inventario', function () {
    return view('modulos.inventario.inventario');
})->name('inventario');

Route::get('modulos/inventario/categorias','Modulos\Inventario\CategoriaController@categorias')
    ->name('categorias');

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

