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

Route::get('/', 'IndexController@getIndex')->name('index');
Route::get('iniciar_sesion', function () {return view('publico.login');})->name('publico.login');

Route::get('logout',['uses'=>'Auth\LoginController@getLogout', 'as'=>'logout']);
Route::post('login','Auth\LoginController@login')->name('login');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');

Route::get('registrar',['uses'=>'UserController@getUserCrear', 'as'=>'registrar']);
Route::post('registrar',['uses'=>'UserController@userCrear', 'as'=>'registrar']);

Route::group(['prefix'=>'admin'], function(){

  //Centros de Acopio
  Route::get('centros_acopio','CentroAcopioController@getListado')->name('admin.centros');
  Route::get('editar_centro_acopio/{id}', 'CentroAcopioController@getEdit')->name('admin.editCentro');
  Route::post('editar_centro_acopio', 'CentroAcopioController@postEdit')->name('admin.postEditCentro');
  Route::get('crear_centro_acopio','CentroAcopioController@getCreate')->name('admin.createCentro');
  Route::post('crear_centro_acopio','CentroAcopioController@postCreate')->name('admin.postCreateCentro');
  //Usuarios
  Route::get('usuarios','UserController@getListado')->name('admin.usuario');
  //Materiales
  Route::get('materiales','MaterialController@getListado')->name('admin.materiales');
  Route::get('crear_material','MaterialController@getCreate')->name('admin.createMaterial');
  Route::post('crear_material','MaterialController@postCreate')->name('admin.postCreateMaterial');
  Route::get('editar_material/{id}', 'MaterialController@getEdit')->name('admin.editMaterial');
  Route::post('editar_material','MaterialController@postEdit')->name('admin.postEditMaterial');
});
