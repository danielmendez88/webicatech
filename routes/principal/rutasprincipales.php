<?php
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
 Route::get('/normatividad', 'principal\MainController@getnormatividad')->name('normatividad');
 Route::get('/comunicados/index', 'ComunicadoController@getnews')->name('comunicados');
 Route::get('/integridad', 'CuentapublicaController@getIntegrity')->name('integridad');
 Route::get('/conocenos', 'principal\MainController@getconocenos')->name('conocenos');
 Route::get('/cobertura', 'principal\MainController@getcobertura')->name('cobertura');
 Route::get('/cursos', 'principal\MainController@getofertaeducativa')->name('oferta-educativa');
 Route::get( '/principal/instructores', 'CursoController@instructores')->name('instructores');
 Route::get('/comunicado-detalle/{id}/{url}', 'ComunicadoController@show')->name('comunicado-detalle');
 Route::get('/revista', 'principal\MainController@getrevista')->name('revista');
 Route::get('/cuenta-publica', 'principal\MainController@getcuentapublica')->name('cuenta-publica');
 /**
  * cursos por categorias
  */
Route::get('/cursos/{id}/{categoria}', 'CursoController@show')->name('cursos');
 

