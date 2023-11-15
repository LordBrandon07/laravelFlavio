<?php

use App\Http\Controllers\CargosController;
use App\Http\Controllers\OcupacionesController;
use App\Http\Controllers\ProfesionesController;
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

// Route::get('/', function () {
//     return view('index');
// });


Route::resource("/ocupaciones", OcupacionesController::class);
Route::resource("/cargos", CargosController::class);
Route::resource("/profesiones", ProfesionesController::class);