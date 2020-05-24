<?php

use Illuminate\Support\Facades\Route;
 
//Login
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('/', 'Auth\LoginController@index')->name('principal');
Route::get('/login', function() { return view('login'); });
//Edificios
Route::resource('/edificios','inmuebleController');
Route::put('modifica-Edificio/{id}','inmuebleController@update');
Route::delete('baja-Edificio/{id}','inmuebleController@destroy');
Route::get('/alta-Edificio', function() { return view('register-building'); });
Route::get('/alta-Administrador/{id}','inmuebleController@regresaInmueble')->name('alta-Administrador');
Route::post('/alta-Administrador','HomeController@registro');


//Usuarios
Route::get('/Usuarios','HomeController@regresaUsuarios')->name('Usuarios');
Route::get('/alta-Usuario','HomeController@vistaCreaUsuario')->name('AltaUsuarios');
Route::post('/registro', 'HomeController@registro');
Route::post('/bajaUsuario/{id}', 'HomeController@eliminaUsuario');
Route::put('/modificaUsuario','HomeController@modificaUsuario');
Route::get('/infoUsuario', 'HomeController@vistaModificaUsuario')->name('informacionUsuario');

//Departamentos
Route::resource('/Departamentos','DepartamentoController');
Route::get('/alta-Inquilino/{id}','DepartamentoController@vistaAltaInquilino')->name('alta-Inquilino');
Route::delete('/baja-departamento/{id}','DepartamentoController@destroy');

Route::get('/modify-user', function() {
    return view('modify-user');
});

Route::get('/temporary-users', function() {
    return view('temporary-users');
});

Route::get('/about-us', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

//Ruta para almacenar usuario
