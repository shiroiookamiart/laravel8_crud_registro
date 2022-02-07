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

/*Route::get('/', function () {
    return view('welcome');
})->middleware("auth");*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/comprar/{id}', [App\Http\Controllers\HomeController::class, 'compra'])->name('compra');
Route::get('/list-compras', [App\Http\Controllers\HomeController::class, 'listCompra'])->name('listCompra');
Route::get('/imprimir/{id}', [App\Http\Controllers\HomeController::class, 'listFacturas'])->name('listFacturas');
Route::get('/generar-factura/{id}', [App\Http\Controllers\HomeController::class, 'genFactura'])->name('genFactura');

Route::get("/facturas", [App\Http\Controllers\AdminController::class, 'facturas'])->name('facturas');
