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

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});

Route::post('companies', \App\Http\Controllers\Api\Companies\StoreCompaniesController::class);

Route::get('/cities', \App\Http\Controllers\Api\Cities\ListCitiesController::class); // cities list
Route::get('/cities/{city}', \App\Http\Controllers\Api\Cities\ShowCitiesController::class); // cityInfo
Route::post('/cities', \App\Http\Controllers\Api\Cities\StoreCitiesController::class); // cityInfo
Route::put('/cities/{city}', \App\Http\Controllers\Api\Cities\UpdateCitiesController::class); // cityInfo
Route::delete('/cities/{city}', \App\Http\Controllers\Api\Cities\DeleteCitiesController::class); // cityInfo

