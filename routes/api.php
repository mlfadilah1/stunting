<?php

use App\Http\Controllers\Api\AhliController as ApiAhliController;
use App\Http\Controllers\Api\EdukasiController;
use App\Http\Controllers\Api\KonsultasiController;
use App\Http\Controllers\Api\UserController;
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
Route::post('/login',[UserController::class,'login']);
Route::get('/edukasi',[EdukasiController::class,'edukasi']);
Route::get('/ahli',[ApiAhliController::class,'ahli']);

Route::post('/register',[UserController::class,'register']);
//konsultasi
Route::get('/konsultasi',[KonsultasiController::class,'konsultasi']);//tampildata
Route::post('/storedata',[KonsultasiController::class,'store']);//inputdata

Route::get('/detail/{id_edukasi}',[EdukasiController::class,'detail']);//