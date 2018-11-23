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
//Ruta para la raiz (localhost:8000)
Route::get('/', function () {
    return view('welcome');
});
//Ruta simple sin parametros
Route::get('/ejemplo',function(){
  return view('ejemplo');
});
//Ruta con parametro opcional (?) y parametro con valor por default
Route::get('/saludar/{nom?}',function($nombre = "Invitado"){
  return "Hola ".$nombre;
});
//Ruta con parametros
Route::get('/sumar/{num1}/{num2}','cuentasController@sumar');

//Get para mostrar el formulario
Route::get('/registro','usuarioController@mostrarFormulario');
//Post para recibir los datos del formulario
Route::post('/registro','usuarioController@mostrarNuevoUsuario');

Route::get('/listarPeliculas','peliculasController@listarArray');
Route::get('/listarPeliculasBD','peliculasController@listarBD');

Route::get('/pelicula/id/{id}','peliculasController@peliculaporid');
Route::get('/pelicula/nombre/{nombre}','peliculasController@peliculapornombre');
