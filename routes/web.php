<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('order', OrderController::class);
Route::resource('customer', CustomerController::class);
Route::resource('kendaraan', KendaraanController::class);

Route::get('/', function () {
    return view('Home');
});