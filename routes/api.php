<?php

use App\Http\Controllers\Api\WidgetsApiController;
use App\Http\Controllers\Api\UserSettingsApiController;
use App\Http\Controllers\Api\MirrorsApiController;
use App\Http\Controllers\Api\AuthApiController;
use GuzzleHttp\Middleware;
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

// public routes
Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/register', [AuthApiController::class, 'register']);
// check of city gebruikt kan worden door open wheater map
Route::get('/weather', [WidgetsApiController::class, 'weathercitycheck']);

// haalt een spesefieke widget op op basis van de type
Route::get('/widgets/getSpesificWidget', [WidgetsApiController::class, 'getSpesificWidget']);
Route::get('/mirrors', [MirrorsApiController::class, 'index']);


// protected routs
// dit moet gecheck worden met token
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user_settings', [UserSettingsApiController::class, 'index']); 

    Route::post('/logout', [AuthApiController::class, 'logout']);
    Route::post('/widgets', [WidgetsApiController::class, 'store']);
    Route::put('/widgets/update', [WidgetsApiController::class, 'update']);
    // Route::put('/user_settings/{setting}', [UserSettingsApiController::class, 'update']);
    // Route::put('/mirrors/{setting}', [MirrorsApiController::class, 'update']);
    Route::delete('/widgets', [WidgetsApiController::class, 'destroy']);
});


