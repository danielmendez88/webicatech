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

Route::get('/', function () {
    return view('index');
});
// CONOCENOS
Route::get('/conocenos', function(){
	return view('pages.conocenos');
});
//COBERTURA
Route::get('/cobertura', function(){
	return view('pages.cobertura');
});
// OFERTA EDUTATIVA
Route::get('/oferta_educativa', function(){
	return view('pages.ofertaeducativa');
});
// NOTICIAS
Route::get('/noticias', function(){
	return view('pages.noticias');
});
// NOTICIAS DETALLES
Route::get('/detalles_noticias', function(){
	$param = "detalle de la noticia";
	return view('micrositios.noticiasdetalle', compact('param'));
});