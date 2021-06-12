<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/import_excel', [PasienController::class, 'import_excel']);

Route::get('/dokter', [DokterController::class, 'index']);
Route::post('/dokter/import_excel', [DokterController::class, 'import_excel']);
