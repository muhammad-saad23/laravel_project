<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\studentController;
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

Route::get('/',[studentController::class,'index']);
Route::get('/studentRegister',[studentController::class,'studentRegister']);
Route::post('/studentRegister',[studentController::class,'create']);