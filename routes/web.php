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

Route::get('/', ['as'=>'index', 'uses'=>'controlpagina@inicio']);

Route::get('/registrar', ['as' => 'registrar',function () {
    return view('registro');
}]);
Route::post('registro', 'controlpagina@registrado');

Route::get('Citas/create', ['as' => 'Cita.create', 'uses'=>'ControlCitas@create']);

Route::get('Citas/index', ['as' => 'Cita.index', 'uses'=>'ControlCitas@index']);

Route::post('Citas/store',['as'=>'Cita.store', 'uses'=>'ControlCitas@store']);

Route::get('citas/{IDcita}',['as'=>'citas.show', 'uses'=>'ControlCitas@show']);

Route::get('citas/{IDcita}/edit',['as'=>'citas.edit', 'uses'=>'ControlCitas@edit']);

Route::put('citas/{IDcita}',['as'=>'citas.update', 'uses'=>'ControlCitas@update']);

Route::get('vehiculos',['as'=>'vehiculos.index', 'uses'=>'ControlVehiculos@index']);

Route::get('vehiculos/create',['as'=>'vehiculos.create', 'uses'=>'ControlVehiculos@create']);

Route::post('validacionvh', 'ControlVehiculos@vhregistro');

Route::post('vehiculos/store',['as'=>'vehiculos.store', 'uses'=>'ControlVehiculos@store']);

Route::get('vehiculos/{matricula}',['as'=>'vehiculos.show', 'uses'=>'ControlVehiculos@show']);

Route::get('clientes',['as'=>'clientes.index', 'uses'=>'ControlClientes@index']);

Route::get('clientes/create',['as'=>'clientes.create', 'uses'=>'ControlClientes@create']);

Route::post('clientes/store',['as'=>'clientes.store', 'uses'=>'ControlClientes@store']);

Route::get('clientes/{IDcli}/edit',['as'=>'clientes.edit', 'uses'=>'ControlClientes@edit']);

Route::put('clientes/{IDcli}',['as'=>'clientes.update', 'uses'=>'ControlClientes@update']);

Route::get('clientes/{IDcli}',['as'=>'clientes.show', 'uses'=>'ControlClientes@show']);

Route::get('Empleados', ['as'=>'empleados.index', 'uses'=>'ControlEmpleados@index']);

Route::get('empleados/create', ['as'=>'empleados.create', 'uses'=>'ControlEmpleados@create']);

Route::post('empleados/store', ['as'=>'empleados.store', 'uses'=>'ControlEmpleados@store']);

Route::get('empleados/{IDem}/edit',['as'=>'empleados.edit', 'uses'=>'ControlEmpleados@edit']);

Route::put('empleados/{IDem}', ['as'=>'empleados.update', 'uses'=>'ControlEmpleados@update']);

Route::get('empleados/{IDem}',['as'=>'empleados.show', 'uses'=>'ControlEmpleados@show']);

Route::post('login',['as' => 'login', 'uses' => 'ControlLogin@login' ]);

Route::get('salir',['as' => 'salir', 'uses' => 'ControlLogin@salir']);