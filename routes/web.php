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

Auth::routes(['verify' => true, 'register' => false]);


//Acceso Publico
Route::get('/', function () {  return redirect('/login'); });
Route::get('/verificardatos/{id_contacto}', 'ContactosController@validarEmail');
Route::get('/confirmacion', function () {  return view('publico'); });

//Acceso bajo Autenticación

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard')->middleware('verified');
    Route::resource('users','UsersController');

    Route::get('/consulta/{tipoCosulta}', 'UsersController@consultarUsuarios');
    Route::get('/consulta/{tipoCosulta}/contactos', 'ContactosController@contactosPorUsuario');

    Route::post('/calificar/{contacto}','ContactosController@calificarContacto')->name('calificar.contacto');

    Route::get('/seleccion/Contacto/{usuario}', 'ContactosController@seleccionContacto');
    Route::get('/asignar/Contacto/{contacto}/{idusuario}', 'ContactosController@asignarContacto');

    Route::resource('contacto','ContactosController');
});















