<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\GuestPageController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\AdminController;


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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');

Route::middleware('auth')->group(function(){
	Route::get('dashboard', [AdminController::class, 'dashboard']); 
	Route::get('signout', [AuthController::class, 'signOut'])->name('signout'); 
});