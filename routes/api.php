<?php

use App\Http\Controllers\WidgetsApiController;
use App\Http\Controllers\UserSettingsApiController;
use App\Http\Controllers\MirrorsApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/widgets', [WidgetsApiController::class, 'index']);
Route::post('/widgets', [WidgetsApiController::class, 'store']);
Route::put('/widgets/{widget}', [WidgetsApiController::class, 'update']);
Route::delete('/widgets/{widget}', [WidgetsApiController::class, 'destroy']);

Route::get('/user_settings', [UserSettingsApiController::class, 'index']);
Route::put('/user_settings/{setting}', [UserSettingsApiController::class, 'update']);

Route::get('/mirrors', [MirrorsApiController::class, 'index']);
Route::put('/mirrors/{setting}', [MirrorsApiController::class, 'update']);
