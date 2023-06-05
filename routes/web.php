<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bahan_bakuC;
use App\Http\Controllers\barangC;
use App\Http\Controllers\gudangbaksoC;
use App\Http\Controllers\jenis_baksoC;
use App\Http\Controllers\loginC;
use App\Http\Controllers\outletC;
use App\Http\Controllers\pegawaiC;
use App\Http\Controllers\produksiC;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/bahan_baku', [bahan_bakuC::class, 'index']);
Route::post('/bahan_baku', [bahan_bakuC::class, 'store']);
Route::put('/bahan_baku/{id}', [bahan_bakuC::class, 'update']);
Route::delete('/bahan_baku/{id}', [bahan_bakuC::class, 'destroy']);

Route::get('/barang', [barangC::class, 'index']);
Route::post('/barang', [barangC::class, 'store']);
Route::put('/barang/{id}', [barangC::class, 'update']);
Route::delete('/barang/{id}', [barangC::class, 'destroy']);

Route::get('/gudangbakso', [gudangbaksoC::class, 'index']);
Route::post('/gudangbakso', [gudangbaksoC::class, 'store']);
Route::put('/gudangbakso/{id}', [gudangbaksoC::class, 'update']);
Route::delete('/gudangbakso/{id}', [gudangbaksoC::class, 'destroy']);

Route::get('/jenis_bakso', [jenis_baksoC::class, 'index']);
Route::post('/jenis_bakso', [jenis_baksoC::class, 'store']);
Route::put('/jenis_bakso/{id}', [jenis_baksoC::class, 'update']);
Route::delete('/jenis_bakso/{id}', [jenis_baksoC::class, 'destroy']);

Route::get('/login', [loginC::class, 'index']);
Route::post('/login', [loginC::class, 'store']);
Route::put('/login/{id}', [loginC::class, 'update']);
Route::delete('/login/{id}', [loginC::class, 'destroy']);

Route::get('/outlet', [outletC::class, 'index']);
Route::post('/outlet', [outletC::class, 'store']);
Route::put('/outlet/{id}', [outletC::class, 'update']);
Route::delete('/outlet/{id}', [outletC::class, 'destroy']);

Route::get('/pegawai', [pegawaiC::class, 'index']);
Route::post('/pegawai', [pegawaiC::class, 'store']);
Route::put('/pegawai/{id}', [pegawaiC::class, 'update']);
Route::delete('/pegawai/{id}', [pegawaiC::class, 'destroy']);

Route::get('/produksi', [produksiC::class, 'index']);
Route::post('/produksi', [produksiC::class, 'store']);
Route::put('/produksi/{id}', [produksiC::class, 'update']);
Route::delete('/produksi/{id}', [produksiC::class, 'destroy']);