<?php

use App\Http\Controllers\CountryController;
use App\Models\Country;
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

Route::get('/colombia', function () {
    return view('./pruebas/colombia');
});

// Route::get('/create', function () {
//     return view('./country/create');
// });

Route::get('/country', [CountryController::class, 'index'])->name('country.index');
Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');

Route::post('/country/store', [CountryController::class, 'store'])->name('country.store');