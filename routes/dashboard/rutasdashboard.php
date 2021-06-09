<?php
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE TABLERO PRINCIPAL
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */

Route::get('/dashboard/main/index', 'dashboard\DashboardController@index')->name('dashboard_principal');
Route::get('/dashboard/admin/form', 'dashboard\DashboardController@createForm')->name('main_form_admin');
Route::post('/dashboard/admin/form/store', 'dashboard\DashboardController@store')->name('main_form_admin_post');
Route::get('/dashboard/admin/{slug_path}/{page_content}/{id}', 'dashboard\DinamycSectionController@index')->name('dinamic_dashboard_form');
Route::post('/dashboard/admin/apartado/form/store', 'dashboard\DinamycSectionController@store')->name('main_form_section_store');
Route::get('/dashboard/admin/add/subcategoria/{slug}/{pagecontent}/{id}/{idapartado}', 'dashboard\DinamycSectionController@show')->name('form_add_subcateogires');
Route::post('file-upload', 'dashboard\DinamycSectionController@fileUploadPost')->name('fileUploadPost');
Route::get('/dashboard/admin/form/banner', 'dashboard\BannerSectionController@index')->name('main_form_banner');
Route::post('file-banner-upload', 'dashboard\BannerSectionController@store')->name('uploadbanner');