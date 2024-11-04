<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\PelaminanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransaksiController;

Route::resource('akun', AkunController::class);
Route::resource('paket', PaketController::class);
Route::resource('baju', BajuController::class);
Route::resource('makeup', MakeupController::class);
Route::resource('pelaminan', PelaminanController::class);
Route::resource('order', OrderController::class);
Route::resource('transaksi', TransaksiController::class);


// Route untuk beranda
Route::get('/', function () {
    return view('home');
});

Route::get('/baju', [BajuController::class, 'index'])->name('baju.index');
Route::delete('/baju/{id}', [BajuController::class, 'destroy'])->name('baju.destroy');
Route::get('/makeup', [MakeupController::class, 'index'])->name('makeup.index');
Route::delete('/makeup/{id}', [MakeupController::class, 'destroy'])->name('makeup.destroy');
Route::get('/', [HomeController::class, 'index'])->name('home');
