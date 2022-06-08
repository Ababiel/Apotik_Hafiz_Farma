<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;
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

Route::get('/login', [LoginController::class, 'index'])->name('home');

// Route::group(['middleware' => 'guest'], function()
// {
    Route::get('/', [WebController::class, 'index']);
    
    // Auth::routes();
    
    Route::get('/home', [HomeController::class, 'index']);
    
    //Obat
    Route::get('/obat',[ObatController::class,'index'])->name('obat');
    Route::get('/obat/form',[ObatController::class,'create']);
    Route::post('/obat/store',[ObatController::class,'store'])->name('obatStore');
    Route::get('/obat/{id}/edit',[ObatController::class,'edit']);
    Route::put('/obat/{id}',[ObatController::class,'update']);
    Route::delete('/obat/{id}',[ObatController::class,'destroy']);
    
    //Karyawan
    Route::get('/karyawan',[KaryawanController::class,'index'])->name('karyawan');
    
    
    //Pelanggan
    Route::get('/pelanggan',[PelangganController::class,'index'])->name('pelanggan');

// });
