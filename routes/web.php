<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/masuk', function () {
    return view('masuk');
});