<?php
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */

 Route::get('/principal', 'principal\MainController@index')->name('principal');

 Route::get('/principal/noticias', 'principal\MainController@noticias')->name('principal.news');

