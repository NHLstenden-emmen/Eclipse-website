<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GuestPageController::class, 'home']);
Route::get('/mirrorSpecs', [GuestPageController::class, 'mirrorSpecs']);
Route::get('/setup', [GuestPageController::class, 'setup']);
Route::get('/widgets', [GuestPageController::class, 'widgets']);
Route::get('/login', [GuestPageController::class, 'login']);
