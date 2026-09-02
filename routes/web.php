<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StokController;

use App\Http\Controllers\BarangController;

Route::resource('barang', BarangController::class);

Route::resource('stok', StokController::class);

Route::get('/', function () {
    return view('welcome');
});
