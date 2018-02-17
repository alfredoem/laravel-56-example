<?php

/**
GET
POST
PUT
 **/

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//// Peliculas
//Route::get('/peliculas', function () {
//    return 'Listado de peliculas.';
//});
//
//
//Route::post('/peliculas', function () {
//    return 'Se creo la pelicula correctamente.';
//});
//
//
//Route::put('/peliculas', function () {
//    return 'Se edito la pelicula correctamente.';
//});

// Canciones

// Listado
Route::get('/canciones', 'CancionesController@index');

// Formulario nueva canción
Route::get('/canciones/nueva', 'CancionesController@crear');

// Crear nueva cancion
Route::post('/canciones', 'CancionesController@guardar');

// Formulario editar cancion
Route::get('/canciones/editar', 'CancionesController@editar');

// update nueva cancion
Route::put('/canciones', 'CancionesController@actualizar');