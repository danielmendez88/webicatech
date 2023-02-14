<?php
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\principal\InstructoresExternosController;
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */
Auth::routes(['register' => false]);

 Route::get('/principal', 'principal\MainController@index')->name('principal');
 Route::get('/', 'principal\MainController@index');

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
 * CONVOCATORIAS
 */
Route::get('/convocatorias/{imagen}', 'principal\ConvocatoriaController@getconvocatoria')->name('convocatoria');
/**
 * instructores externos
 */
Route::get('/convocatoria/instructores', [InstructoresExternosController::class, 'index'])->name('convocatoria.instructores.externos');
Route::get('/convocatorias/instructores/externos/detalle/{id}', [InstructoresExternosController::class, 'show'])->name('convocatoria.instructores_externos.detalle');

 /**
  * cursos por categorias
  */
Route::get('/cursos/{id}/{categoria}', 'CursoController@show')->name('cursos');

/**
 * avisos de privacidad
 */
Route::get( '/avisos-de-privacidad', 'CuentapublicaController@avisosprivacidad');
/**
 * ruta de busqueda de cursos
 */
Route::get('/cursos/buscar','CursoController@searchCursosByParam')->name('buscadorBy');

/**
 * rutas seccion de integridad
 */
Route::get('/integridad/introduccion', 'principal\IntegridadController@getintroduccion')->name('integridad.introduccion');
Route::get('/integridad/objetivo', 'principal\IntegridadController@getobjetivo')->name('integridad.objetivo');
Route::get('/integridad/acta-instalacion', 'principal\IntegridadController@getactainstalacion')->name('integridad.acta.instalacion');
Route::get('/integridad/directorio-cepci', 'principal\IntegridadController@getdirectoriocepci')->name('integridad.directorio.cepci');
Route::get('/integridad/codigo-conducta', 'principal\IntegridadController@getcondigoconducta')->name('integridad.codigo.conducta');
Route::get('/integridad/atencion-quedas-denuncias', 'principal\IntegridadController@getquejasodenuncias')->name('integridad.quejas.denuncias');
Route::get('/integridad/pronunciamiento', 'principal\IntegridadController@getpronunciamiento')->name('integridad.pronunciamiento');
Route::get('/integridad/directorio-consejeros', 'principal\IntegridadController@getdirectorioconsejeros')->name('integridad.directorio.consejeros');
Route::get('/integridad/directorio-asesores', 'principal\IntegridadController@getdirectorioasesores')->name('integridad.directorio.asesores');
Route::get('/integridad/informe-anual-actividades', 'principal\IntegridadController@getinformeanualactividades')->name('integridad.informe.anual.actividades');

/**
 * catálogo factibilidad
 */

Route::get('/cursos/factibilidad', 'CursoController@getcatfactibilidad')->name('catalogo.factibilidad');

Route::middleware(['cors'])->group(function () {
    // nuevo comunicado
    Route::get('/nuevo-comunicado', 'ComunicadoController@getform');
    Route::post('/noticias-save', 'ComunicadoController@store')->name('comunicados.save');
    Route::get('/comunicado', 'ComunicadoController@getnews')->name('comunicado.index');
    /**
   * inicio de sesión
   */
    Route::get('/login','LoginController@show_login_form')->name('login');
    Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post');
});










