<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/ciudad', 'CiudadController@formulario')->name('ciudad-form');
Route::POST('/guardar-ciudad', 'CiudadController@guardar_ciudad')->name('guardar-ciudad');
route::get('/reporte','CiudadController@reporte')->name('reporte');

route::get('/chofer', 'ChoferController@formulario')->name('chofer-form');
route::POST('/chofer-save', 'ChoferController@guardar')->name('chofer-save');

route::post('/reporte-chofer','ChoferController@reporte')->name('reporte-chofer');
route::post('/reporte-chofe','ChoferController@reporte_chofer')->name('reporte-chofe');

