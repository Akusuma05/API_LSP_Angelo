<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TrukController;
use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('Mobil', MobilController::class);
// Route::resource('Motor', MotorController::class);
// Route::resource('Truk', TrukController::class);
// Route::resource('Kendaraan', KendaraanController::class);
// Route::resource('Order', OrderController::class);
// Route::resource('Customer', CustomerController::class);