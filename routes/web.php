<?php

use App\Http\Controllers\ahliController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\suadminController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', function () {
    Auth::logout();
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware();


Route::middleware(['auth','suadmin'])->group(function(){
    Route::get('/suadmin', [suadminController::class, 'suadmin'])->name('suadmin');
    Route::get('/timahlii', [suadminController::class, 'tenagamedis'])->name('tenagamedis');
    Route::get('/user', [suadminController::class, 'user'])->name('user');
    Route::get('/programstunting', [suadminController::class, 'programstunting'])->name('programstunting');
    Route::get('/edukasii', [suadminController::class, 'programkesehatan'])->name('programkesehatan');
    Route::get('/konsultasii', [suadminController::class, 'daftarkonsultasi'])->name('daftarkonsultasi');
    Route::get('/jadwalkonsultasi', [suadminController::class, 'jadwalkonsultasi'])->name('jadwalkonsultasi');
    //CRUD Tim ahli
    Route::get('/inputahli', [suadminController::class, 'inputahli'])->name('inputahli');
    Route::post('/submitahli',[suadminController::class, 'submit'])->name('submitahli');
    route::get('/deleteahli/{id_ahli}', [suadminController::class, 'deleteahli']);
    route::get('/formeditahli/{id_ahli}', [suadminController::class, 'formeditahli']);
    route::post('/updateahli', [suadminController::class, 'updateahli']);
    //Edukasi
    
    Route::get('/inputedukasi',[suadminController::class, 'inputedukasi'])->name('inputedukasi');
    Route::post('/submitedukasi',[suadminController::class, 'submitedukasi'])->name('submitedukasi');
    route::get('/deleteedukasi/{id_edukasi}', [suadminController::class, 'deleteedukasi']);
    route::get('/formeditedukasi/{id_edukasi}', [suadminController::class, 'formeditedukasi']);
    route::post('/updateedukasi', [suadminController::class, 'updateedukasi']);
    route::get('/baca/{id_edukasi}', [suadminController::class, 'baca']);
    // In routes/web.php
    // Route::get('/suadmin/programkesehatan', [suadminController::class, 'programkesehatan'])->name('programkesehatan');


    //konsultasi
    route::get('/status/{id_konsultasi}', [suadminController::class, 'status']);
    route::post('/updatekonsultasi', [suadminController::class, 'updatekonsultasi']);
    
    //user
    Route::get('/inputuser',[suadminController::class, 'inputuser'])->name('inputuser');
    Route::post('/submituser',[suadminController::class, 'submituser'])->name('submituser');
    route::get('/deleteuser/{id}', [suadminController::class, 'deleteuser']);

    //profile
    Route::get('/profile',[suadminController::class, 'profile'])->name('profile');
    route::get('/edit/{id}', [suadminController::class, 'edit'])->name('edit');
    Route::post('/submitprofile', [suadminController::class, 'submitprofile'])->name('submitprofile');
    route::post('/updateprofile', [suadminController::class, 'updateprofile']);
});
Route::middleware(['auth','ahli'])->group(function(){
    Route::get('/ahli', [ahliController::class, 'ahli'])->name('ahli');
    Route::get('/indexx', [ahliController::class, 'index'])->name('index');
    Route::get('/konsultasii', [suadminController::class, 'daftarkonsultasi'])->name('daftarkonsultasi');
    // Route::get('/profile',[suadminController::class, 'profile'])->name('profile');
});
Route::middleware(['auth','pengguna'])->group(function(){
    //dashboard
    Route::get('/pengguna', [penggunaController::class, 'pengguna'])->name('pengguna');
    //edukasi
    // Route::get('/edukasii', [suadminController::class, 'programkesehatan'])->name('programkesehatan');
    // route::get('/baca/{id_edukasi}', [suadminController::class, 'baca']);
    Route::get('/edukasi', [penggunaController::class, 'edukasi'])->name('edukasi');
    route::get('/baca/{id_edukasi}', [suadminController::class, 'baca']);
    // timahli
    Route::get('/timahlii', [suadminController::class, 'tenagamedis'])->name('tenagamedis');
    Route::get('/timahli', [penggunaController::class, 'timahli'])->name('timahli');
    Route::get('/konsultasi', [penggunaController::class, 'konsultasi'])->name('konsultasi');
    Route::post('/submitkonsultasi', [penggunaController::class, 'submit'])->name('submit');
    Route::get('/profile',[suadminController::class, 'profile'])->name('profile');
    route::get('/lihat/{id_ahli}', [penggunaController::class, 'lihat']);
    // Route::get('/pengguna/timahli', [suadminController::class, 'timahli'])->name('timahli');
});