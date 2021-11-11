<?php
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */
Auth::routes(['register' => false]);

 Route::get('/principal', 'principal\MainController@index')->name('principal');

 Route::get('/principal/noticias', 'principal\MainController@noticias')->name('principal.news');
 Route::get('/principal/transparencia', 'principal\MainController@gettransparencia')->name('transparencia');
 Route::get('/principal/normatividad', 'principal\MainController@getnormatividad')->name('normatividad');
 Route::get('/principal/comunicados', 'ComunicadoController@getnews')->name('comunicados');
 Route::get('/principal/integridad', 'CuentapublicaController@getIntegrity')->name('integridad');
 Route::get('/conocenos', 'principal\MainController@getconocenos')->name('conocenos');
 Route::get('/principal/cobertura', 'principal\MainController@getcobertura')->name('cobertura');
 Route::get('/principal/cursos', 'principal\MainController@getofertaeducativa')->name('oferta-educativa');
 Route::get( '/principal/instructores', 'CursoController@instructores')->name('instructores');
 Route::get('/principal/comunicado-detalle/{id}/{url}', 'ComunicadoController@show')->name('comunicado-detalle');
 Route::get('/principal/revista', 'principal\MainController@getrevista')->name('revista');
 Route::get('/principal/cuenta-publica', 'principal\MainController@getcuentapublica')->name('cuenta-publica');
 
