<?php

use App\Models\Widget;
use App\Http\Controllers\WidgetApiController;
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

Route::get('/widgets', [WidgetApiController::class, 'index']);
Route::post('/widgets', [WidgetApiController::class, 'store']);
Route::put('/widgets/{widget}', [WidgetApiController::class, 'update']);
Route::delete('/widgets/{widget}', [WidgetApiController::class, 'destroy']);