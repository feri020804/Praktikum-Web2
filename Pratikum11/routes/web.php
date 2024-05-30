<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Feri Ardiansyah siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien/show', [PasienController::class, 'show']);

Route::get('/kelurahan/show', [KelurahanController::class, 'show']);

Route::get('/unit_kerja/show', [UnitKerjaController::class, 'show']);

Route::get('/paramedik/show', [ParamedikController::class, 'show']);

Route::get('/periksa/show', [PeriksaController::class, 'show']);
