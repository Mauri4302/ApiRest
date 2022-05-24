<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// METODOS QUE SE UTILIZARAN PARA CONSUMIR LA API
Route::get('/personas', 'App\Http\Controllers\PersonaController@index');// MOSTRAR TODOS LOS REGISTROS
Route::post('/personas', 'App\Http\Controllers\PersonaController@store');// CREAR UN REGISTRO
Route::put('/personas/{id}', 'App\Http\Controllers\PersonaController@update');// ACTUALIZAR UN REGISTRO
Route::get('/personas', 'App\Http\Controllers\PersonaController@destroy');// ELIMINAR UN REGISTRO
