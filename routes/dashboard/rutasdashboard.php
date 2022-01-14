<?php
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE TABLERO PRINCIPAL
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */
/**
 * agregar el auth en un middleware
 */
Route::get('/login','LoginController@show_login_form')->name('login');
Route::post('/login','LoginController@process_login')->name('login-post');
Route::post('/logout', 'LoginController@logout')->name('logout');

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard/main/index', 'dashboard\DashboardController@index')->name('dashboard_principal');
    Route::get('/dashboard/admin/form', 'dashboard\DashboardController@createForm')->name('main_form_admin');
    Route::post('/dashboard/admin/form/store', 'dashboard\DashboardController@store')->name('main_form_admin_post');
    Route::get('/dashboard/admin/{slug_path}/{page_content}/{id}', 'dashboard\DinamycSectionController@index')->name('dinamic_dashboard_form');
    Route::post('/dashboard/admin/apartado/form/store', 'dashboard\DinamycSectionController@store')->name('main_form_section_store');
    Route::get('/dashboard/admin/add/subcategoria/{slug}/{pagecontent}/{id}/{idapartado}', 'dashboard\DinamycSectionController@show')->name('form_add_subcateogires');
    Route::post('file-upload', 'dashboard\DinamycSectionController@fileUploadPost')->name('fileUploadPost');
    Route::get('/dashboard/admin/form/banner', 'dashboard\BannerSectionController@index')->name('main_form_banner');
    Route::post('file-banner-upload', 'dashboard\BannerSectionController@storefromajax')->name('storefromajax');
    Route::get('/dashboard/admin/user/index', 'dashboard\UserController@index')->name('main_user_index');
    Route::get('/dashboard/admin/user/list', 'dashboard\UserController@list')->name('add_new_user');
    Route::post('/dashboard/admin/user/store', 'dashboard\UserController@store')->name('new_user_store');
    Route::get('/dashboard/admin/usuario/{id}', 'dashboard\UserController@show')->name('edit_user_setting');
    Route::put('/dashboard/admin/user-update/{id}', 'dashboard\UserController@update')->name('edit_user_update');
    Route::get('/dashboard/admin/banner/index', 'dashboard\BannerSectionController@main_banner')->name('main_index_banner');
    Route::get('/dashboard/banner/categoria/{id}', 'dashboard\BannerSectionController@show')->name('select_category');
    Route::post('/save/post/banner', 'dashboard\BannerSectionController@store')->name('save_post_banner');
    Route::get('/dashboad/banner/edit/{id}/{idBan}', 'dashboard\BannerSectionController@edit')->name('edit_form_banner');
    Route::get('/dashboard/admin/comunicado/form', 'dashboard\ComunicadoController@create')->name('administrar-comunicado');
    Route::post('/dashboard/admin/comunicado/store', 'dashboard\ComunicadoController@store')->name('comunicado_store');
    Route::get('/dashboard/admin/comunicado/index', 'dashboard\ComunicadoController@index')->name('comunicado_indice');
    Route::get('/dashboard/comunicado/detalle/indice/{id}', 'dashboard\ComunicadoController@show')->name('detalle_comunicado');
    Route::post('create-catalogo-sub', 'dashboard\DinamycSectionController@create_sub')->name('store_catalogo_sub');
    Route::get('/dashboard/admin/sub/{slug}/{pagecontent}/{id}/{subapartado}', 'dashboard\DinamycSectionController@showsubcat')->name('form_add_sub_cat');
    Route::delete('delete-banner-element/{id}/{categoria}', 'dashboard\BannerSectionController@destroy')->name('delete_banner_element');
    Route::get('/dashboard/banner/link/{id}/{idcat}', 'dashboard\BannerSectionController@linked_banner')->name('link_banner_secundario');
    Route::post('/dashboard/vincular/banner/secundario', 'dashboard\BannerSectionController@secondary_banner_linked')->name('save_linked_banner');
 
});
