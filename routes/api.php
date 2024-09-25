<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Middleware untuk autentikasi
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Endpoint untuk resource posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

// API untuk menghitung persegi panjang
Route::post('/tugas/persegi-panjang/luas', [App\Http\Controllers\Api\Tugas\LuasPersegiPanjangController::class, 'hitungLuas']);
Route::post('/tugas/persegi-panjang/keliling', [App\Http\Controllers\Api\Tugas\KelilingPersegiPanjangController::class, 'hitungKeliling']);

// API untuk menghitung segitiga
Route::post('/tugas/segitiga/luas', [App\Http\Controllers\Api\Tugas\LuasSegitigaController::class, 'hitungLuas']);
Route::post('/tugas/segitiga/keliling', [App\Http\Controllers\Api\Tugas\KelilingSegitigaController::class, 'hitungKeliling']);

// API untuk menghitung lingkaran
Route::post('/tugas/lingkaran/luas', [App\Http\Controllers\Api\Tugas\LuasLingkaranController::class, 'hitungLuas']);
Route::post('/tugas/lingkaran/keliling', [App\Http\Controllers\Api\Tugas\KelilingLingkaranController::class, 'hitungKeliling']);

// API untuk menghitung kubus
Route::post('/tugas/kubus/volume', [App\Http\Controllers\Api\Tugas\VolumeKubusController::class, 'hitungVolume']);
Route::post('/tugas/kubus/luas-permukaan', [App\Http\Controllers\Api\Tugas\LuasPermukaanKubusController::class, 'hitungLuasPermukaan']);
