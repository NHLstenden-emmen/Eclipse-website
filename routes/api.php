<?php

use App\Http\Controllers\Api\WidgetsApiController;
use App\Http\Controllers\Api\UserSettingsApiController;
use App\Http\Controllers\Api\AuthApiController;
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

Route::get('/noAuth/widgets', [WidgetsApiController::class, 'index']);
Route::get('/noAuth/user_settings/search/{id}', [UserSettingsApiController::class, 'getUserSettings']);

// protected routs
// dit moet gecheck worden met token
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/widgets', [WidgetsApiController::class, 'index']);
    Route::get('/user_settings/search/{id}', [UserSettingsApiController::class, 'getUserSettings']);
    
    // check of city gebruikt kan worden door open wheater map
    Route::get('/weather', [WidgetsApiController::class, 'weatherCityCheck']);
    Route::get('/weatherwidget/{cityId}', [WidgetsApiController::class, 'CheckCity']);

    // haalt een spesefieke widget op op basis van de type
    Route::get('/widgets/getSpesificWidget', [WidgetsApiController::class, 'getSpesificWidget']);

    Route::post('/logout', [AuthApiController::class, 'logout']);
    // Route::post('/widgets/store', [WidgetsApiController::class, 'store']);
    // Route::put('/widgets/update', [WidgetsApiController::class, 'update']);

    Route::post('/user_settings/update', [UserSettingsApiController::class, 'update']);
    // Route::delete('/widgets/destroy/{id}', [WidgetsApiController::class, 'destroy']);
});