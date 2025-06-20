<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoControlador;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ControladorAdmin;
use App\Http\Controllers\DetalleControlador;
use App\Http\Controllers\ProdControlador;

// Definir constantes para evitar duplicación de paths
const CLIENTE_DOC_PATH = '/cliente/{clie_Documento_PK}';
const PEDIDO_ID_PATH = '/pedido/{id_Pedido_PK}';

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
    Route::get('/cliente', [ControladorCliente::class, 'index']);
    Route::get(CLIENTE_DOC_PATH, [ControladorCliente::class, 'show']);
    Route::post('/cliente', [ControladorCliente::class, 'store']);
    Route::delete(CLIENTE_DOC_PATH, [ControladorCliente::class, 'destroy']);
    Route::put(CLIENTE_DOC_PATH, [ControladorCliente::class, 'update']);
    Route::post('/login', [LoginController::class, 'login']);
});
//Pedido
Route::get('/pedido', [PedidoControlador::class, 'index']);
Route::get(PEDIDO_ID_PATH, [PedidoControlador::class, 'show']);
Route::post('/pedido', [PedidoControlador::class, 'store']);
Route::put(PEDIDO_ID_PATH, [PedidoControlador::class, 'update']);
Route::delete(PEDIDO_ID_PATH, [PedidoControlador::class, 'destroy']);
//admin
Route::get('/administrador', [ControladorAdmin::class, 'index']);
Route::get('/administrador/{admi_Codigo_PK}', [ControladorAdmin::class, 'show']);
Route::post('/administrador', [ControladorAdmin::class, 'store']);
Route::delete('/administrador/{admi_Codigo_PK}', [ControladorAdmin::class, 'destroy']);

//Producto
Route::get('/producto', [ProdControlador::class, 'index']);
Route::get('/producto/{prod_Codigo_PK}', [ProdControlador::class, 'show']);

//Detalle
Route::get('/detallepedido', [DetalleControlador::class, 'index']);
Route::post('/detallepedido', [DetalleControlador::class, 'store']);
