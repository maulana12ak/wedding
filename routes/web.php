<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\PelaminanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\PaketController;

Route::resource('akun', AkunController::class);
Route::resource('paket', PaketController::class);
Route::resource('baju', BajuController::class);
Route::resource('makeup', MakeupController::class);
Route::resource('pelaminan', PelaminanController::class);

// Route untuk beranda
Route::get('/', function () {
    return view('home');
});

Route::get('/baju', [BajuController::class, 'index'])->name('baju.index');
Route::delete('/baju/{id}', [BajuController::class, 'destroy'])->name('baju.destroy');
Route::get('/', [HomeController::class, 'index'])->name('home');
