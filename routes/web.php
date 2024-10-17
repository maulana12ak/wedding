<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\PelaminanController;
use App\Http\Controllers\PaketPernikahanController;

Route::resource('akun', AkunController::class);
Route::resource('baju', BajuController::class);
Route::resource('pelaminan', PelaminanController::class);
Route::resource('paket', PaketPernikahanController::class);

// Route untuk beranda
Route::get('/', function () {
    return view('akun');
});
