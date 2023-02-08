<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;

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
Route::get('/login','LoginController@show_login_form')->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Auth::routes(['register' => false]);

// REGISTRO DE ASPIRANTES
Route::get('/aspirante', 'AlumnoController@create')->name('aspirante.crear');
Route::post('/aspirante/save', 'AlumnoController@store')->name('alumnos.save');


Route::get('/', 'ComunicadoController@index');
// CONOCENOS
// Route::get('/conocenos', function(){
// 	return view('pages.conocenos');
// });
//COBERTURA
// Route::get('/cobertura', function(){
// 	return view('pages.cobertura');
// });
// OFERTA EDUTATIVA
Route::get('/oferta-educativa', 'CursoController@index')->name('oferta-educativa');
// NOTICIAS
Route::get('/noticias', 'ComunicadoController@index');
Route::post('/noticias-save', 'ComunicadoController@store')->name('comunicados.save');
Route::get('/nuevo-comunicado', 'ComunicadoController@getform');
Route::get('/comunicado/modificar/{id}', 'ComunicadoController@edit')->name('comunicado.modificar.show');
Route::put('/comunicado/modificar/update/{id}', 'ComunicadoController@update')->name('comunicado.modificar.update');
Route::get('/comunicado/detalle/{id}', 'ComunicadoController@showdetails')->name('comunicado.detalle.show');
// agregar el indice principal de comunicados
// Route::get('/comunicado', 'ComunicadoController@getnews')->name('comunicado.index');
// NOTICIAS DETALLES
Route::get('/detalles-noticias', function(){
	$param = "detalle de la noticia";
	return view('micrositios.noticiasdetalle', compact('param'));
});
// TRANSPARENCIA
// Route::get( '/transparencia', 'CuentapublicaController@transparencia');
// revista
Route::get( '/revista', function(){
	return view('pages.revista');
})->name('revista');
// AVISOS DE PRIVACIDAD
Route::get( '/avisos-de-privacidad', 'CuentapublicaController@avisosprivacidad');

// LICITACIONES
Route::get('/licitaciones', 'CuentapublicaController@licitaciones');

//SEVAC
Route::get('/sevac', 'CuentapublicaController@sevac');

//SEVAC 2018
Route::get('/sevac2018', 'CuentapublicaController@sevac_2018');

//NORMATIVIDAD
// Route::get('/normatividad', 'CuentapublicaController@normatividad');
//CUENTA PUBLICA
Route::get('/cuenta-publica', 'CuentapublicaController@index');
//DIRECTORIO
Route::get('directorio',function(){
	return view('pages.directorio');
});
//Integridad
Route::get('/Integridad', 'CuentapublicaController@Integridad');
// Comunicado detalle
Route::get('/comunicado-detalle/{id}/{slug}', 'ComunicadoController@show');
//INSTRUCTORES
Route::get( '/instructores', 'CursoController@instructores');

Route::get('/cursos/{id}/{categoria}', 'CursoController@show')->name('cursos');

//transparencia-icatech
Route::get('/transparenciaicatech', 'CuentapublicaController@transparenciaicatech');
// prospectos
Route::get('/prospectosalumnos', 'ProspectosController@index');

// convocatorias
Route::get('/convocatorias/instructores-externos', 'ConvocatoriasController@instructores_externos')->name('convocatoria.instructores_externos');



Auth::routes();

// grupo con un componente llamado midleware
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/noticias-seguimientos', 'HomeController@news')->name('noticias-seguimientos');
});

Route::get('listadotransparencia', function () {
	return view('pages.pagestransparencia.transparencia');
});
// nueva ruta para el controlador transparencia/
 //PLANEACION NUEVA PAGINA/




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
