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
use App\Http\Controllers\DesaController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/desa', [DesaController::class, 'index']);
Route::get('/desa/{id}', [DesaController::class, 'show']);
Route::post('/desa', [DesaController::class, 'store']);
Route::put('/desa/{id}', [DesaController::class, 'update']);
Route::delete('/desa/{id}', [DesaController::class, 'destroy']);