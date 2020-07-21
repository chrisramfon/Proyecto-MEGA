<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/registrar', ['as' => 'registrar',function () {
    return view('registro');
}]);
Route::post('registro', 'controlpagina@registrado');

Route::get('Citas/create', ['as' => 'Cita.create', 'uses'=>'ControlCitas@create']);

Route::get('Citas/index', ['as' => 'Cita.index', 'uses'=>'ControlCitas@index']);

Route::post('Citas/store',['as'=>'Cita.store', 'uses'=>'ControlCitas@store']);

Route::get('vehiculos',['as'=>'vehiculos.index', 'uses'=>'ControlVehiculos@index']);

Route::get('vehiculos/create',['as'=>'vehiculos.create', 'uses'=>'ControlVehiculos@create']);

Route::post('vehiculos/store',['as'=>'vehiculos.store', 'uses'=>'ControlVehiculos@store']);

Route::get('vehiculos/{matricula}',['as'=>'vehiculos.show', 'uses'=>'ControlVehiculos@show']);

Route::get('clientes',['as'=>'clientes.index', 'uses'=>'ControlClientes@index']);

Route::get('clientes/create',['as'=>'clientes.create', 'uses'=>'ControlClientes@create']);

Route::post('clientes/store',['as'=>'clientes.store', 'uses'=>'ControlClientes@store']);