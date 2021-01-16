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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//MODULO DE COLEGIOS
//Route::get('/colegios/colegios', function () {
//    return view('modulos.colegios.colegios');
//})->name('colegios');
//
//Route::get('/colegios/crear_colegio', function () {
//    return view('modulos.colegios.crear_colegio');
//})->name('crear_colegio');
//Route::resource('colegios','Modulos\Colegios\ColegioController');
Route::get('modulos/colegios','Modulos\Colegios\ColegioController@index')->name('colegios');
Route::get('modulos/colegios/{colegio}','Modulos\Colegios\ColegioController@show')->name('colegios.show');

//MODULO DE USUARIOS
Route::get('/usuarios/usuarios', function () {
    return view('modulos.usuarios.usuarios');
})->name('usuarios');

//MODULO DE INVENTARIO
Route::get('/modulos/inventario/inventario', function () {
    return view('modulos.inventario.inventario');
})->name('inventario');

Route::get('modulos/inventario/categorias','Inventario\CategoriaController@categorias')->name('categorias');

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

//LEVANTAR ERRORES
//Route::get('/home', 'HomeController@index')->name('home');
