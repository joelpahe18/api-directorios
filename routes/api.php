<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/auth'

], function ($router) {
    Route::post('login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\Api\V1\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\Api\V1\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\Api\V1\AuthController::class, 'me']);
});

Route::apiResource('v1/directorioServicio', App\Http\Controllers\Api\V1\DirectorioServicioController::class);
Route::apiResource('v1/ubicacionServicio', App\Http\Controllers\Api\V1\UbicacionServicioController::class);
Route::apiResource('v1/maestroMunicipio', App\Http\Controllers\Api\V1\MaestroMunicipioController::class);