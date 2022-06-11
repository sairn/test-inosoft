<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('kendaraan')->group(function () {
    Route::get('/', [Api\KendaraanController::class, 'get']);
    Route::get('/{id}/{fff}', [Api\KendaraanController::class, 'read']);
    Route::post('/create', [Api\KendaraanController::class, 'create']);
    Route::post('/{id}', [Api\KendaraanController::class, 'update']);
    Route::delete('/{id}', [Api\KendaraanController::class, 'delete']);
    Route::get('/stokmobil', [Api\MobilController::class, 'get']);
    Route::get('/stokmotor', [Api\MotorController::class, 'get']);
});
