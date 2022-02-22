<?php
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */
Auth::routes(['register' => false]);

 Route::get('/principal', 'principal\MainController@index')->name('principal');
 Route::get('/', 'principal\MainController@index');

 Route::get('/noticias', 'principal\MainController@noticias')->name('principal.news');
 Route::get('/transparencia', 'principal\MainController@gettransparencia')->name('transparencia');
//  Route::get('/normatividad', 'principal\MainController@getnormatividad')->name('normatividad');
 Route::get('/normatividad', 'CuentapublicaController@normatividad')->name('normatividad');
 Route::get('/comunicados/index', 'ComunicadoController@getnews')->name('comunicados');
//  Route::get('/integridad', 'CuentapublicaController@getIntegrity')->name('integridad');
 Route::get('/conocenos', 'principal\MainController@getconocenos')->name('conocenos');
 Route::get('/cobertura', 'principal\MainController@getcobertura')->name('cobertura');
 Route::get('/cursos', 'principal\MainController@getofertaeducativa')->name('oferta-educativa');
 Route::get( '/principal/instructores', 'CursoController@instructores')->name('instructores');
 Route::get('/comunicado-detalle/{id}/{url}', 'ComunicadoController@show')->name('comunicado-detalle');
 Route::get('/revista', 'principal\MainController@getrevista')->name('revista');
 Route::get('/cuenta-publica', 'principal\MainController@getcuentapublica')->name('cuenta-publica');
 Route::get('/sevac', 'CuentapublicaController@sevac')->name('sevac');
 Route::get('/integridad', 'CuentapublicaController@Integridad')->name('integridad');
 // LICITACIONES
Route::get('/licitaciones', 'CuentapublicaController@licitaciones')->name('licitaciones');
 /**
  * cursos por categorias
  */
Route::get('/cursos/{id}/{categoria}', 'CursoController@show')->name('cursos');
/**
 * inicio de sesión
 */
Route::get('/login','LoginController@show_login_form')->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// nuevo comunicado
Route::get('/nuevo-comunicado', 'ComunicadoController@getform');
Route::post('/noticias-save', 'ComunicadoController@store')->name('comunicados.save');
Route::get('/comunicado', 'ComunicadoController@getnews')->name('comunicado.index');
/**
 * avisos de privacidad
 */
Route::get( '/avisos-de-privacidad', 'CuentapublicaController@avisosprivacidad');
/**
 * ruta de busqueda de cursos
 */
Route::get('/cursos/buscar','CursoController@searchCursosByParam')->name('buscadorBy');

