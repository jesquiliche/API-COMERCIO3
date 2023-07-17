<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::apiResource('v1/categorias', App\Http\Controllers\Api\V1\CategoriaController::class)->middleware('api');
Route::apiResource('v1/ivas', App\Http\Controllers\Api\V1\IvaController::class);
Route::apiResource('v1/productos', App\Http\Controllers\Api\V1\ProductoController::class);
Route::apiResource('v1/ofertas', App\Http\Controllers\Api\V1\OfertaController::class);
Route::apiResource('v1/poblaciones', App\Http\Controllers\Api\V1\PoblacionController::class);
Route::apiResource('v1/productos', App\Http\Controllers\Api\V1\ProductoController::class);
Route::apiResource('v1/proveedores', App\Http\Controllers\Api\V1\ProveedorController::class);
Route::apiResource('v1/provincias', App\Http\Controllers\Api\V1\ProvinciaController::class);
Route::apiResource('v1/subcategorias', App\Http\Controllers\Api\V1\SubcategoriaController::class);
Route::apiResource('v1/marcas', App\Http\Controllers\Api\V1\MarcaController::class);

Route::post('v1/upload-image', [App\Http\Controllers\Api\V1\ImageController::class,'store']);
