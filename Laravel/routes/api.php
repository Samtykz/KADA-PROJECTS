<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorCliente;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pedidoControlador; 
use App\Http\Controllers\loginAdminController; 
use App\Http\Controllers\controladorAdmin;
use App\Http\Controllers\detalleControlador;
use App\Http\Controllers\prodControlador;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['cors'])->group(function () {
    Route::get('/cliente', [controladorCliente::class, 'index']);
    Route::get('/cliente/{clie_Documento_PK}', [controladorCliente::class, 'show']);
    Route::post('/cliente', [controladorCliente::class, 'store']);
    Route::delete('/cliente/{clie_Documento_PK}', [controladorCliente::class, 'destroy']);
    Route::put('/cliente/{clie_Documento_PK}', [controladorCliente::class, 'update']); 
    Route::post('/login', [LoginController::class, 'login']);
});

//Pedido
Route::get('/pedido', [pedidoControlador::class, 'index']);
Route::get('/pedido/{id_Pedido_PK}', [pedidoControlador::class, 'show']);
Route::post('/pedido', [pedidoControlador::class, 'store']);
Route::put('/pedido/{id_Pedido_PK}', [pedidoControlador::class, 'update']);
Route::delete('/pedido/{id_Pedido_PK}', [pedidoControlador::class, 'destroy']);

//admin
Route::get('/administrador', [controladorAdmin::class, 'index']);
Route::get('/administrador/{admi_Codigo_PK}', [controladorAdmin::class, 'show']);
Route::post('/administrador', [controladorAdmin::class, 'store']);
Route::delete('/administrador/{admi_Codigo_PK}', [controladorAdmin::class, 'destroy']);
Route::put('/administrador/{admi_Codigo_PK}', [controladorAdmin::class, 'update']); 
Route::post('/loginAdmin1', [loginAdminController::class, 'loginAdmin1']);

//Producto
Route::get('/producto', [prodControlador::class, 'index']);
Route::get('/producto/{prod_Codigo_PK}', [prodControlador::class, 'show']);

//Detalle
Route::get('/detallepedido', [detalleControlador::class, 'index']);
Route::post('/detallepedido', [detalleControlador::class, 'store']);