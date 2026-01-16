<?php

use App\Http\Controllers\PengarangController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\IsiRakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('pengarangs', PengarangController::class);
Route::resource('raks', RakController::class);
Route::resource('bukus', BukuController::class);
Route::resource('isi_raks', IsiRakController::class);
