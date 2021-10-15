<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionController;

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
/* usuar singular nombre de cliente */
/* Route::get('/Cliente',[ClienteController::class, 'showAll']); */
/* Route::group(['middleware' => ['cors']], function(){ */
    Route::post('/Cliente/signup', [ClienteController::class, 'signup']);
    Route::post('/Cliente/login', [ClienteController::class, 'login']);
    Route::get('/Habitacion/search', [HabitacionController::class, 'search']);
    Route::get('/Habitacion/filter', [HabitacionController::class, 'filter']); 

Route::group(['middleware' => ['jwt.verify']], function(){
    Route::get('/Cliente', [ClienteController::class, 'showAll']);
    Route::post('/Cliente/update', [ClienteController::class, 'update']);
    Route::post('/reservacion/create', [ReservaController::class, 'create']);
    Route::get('/reservacion/history', [ReservaController::class, 'showByCliente']);
});


/* /* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user(); */
/* }); */
