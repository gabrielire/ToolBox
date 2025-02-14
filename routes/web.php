<?php

use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TampilanController::class, 'Home'] );
Route::get('/keranjang', [TampilanController::class, 'Keranjang'] );
Route::get('/checkout', [TampilanController::class, 'Checkout'] );
Route::get('/daftar', [TampilanController::class, 'Daftar'] );
Route::get('/masuk', [TampilanController::class, 'Masuk'] );
Route::get('/detail', [TampilanController::class, 'Detail'] );

