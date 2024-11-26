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
use App\Models\Order;

Route::resource('akun', AkunController::class);
Route::resource('paket', PaketController::class);
Route::resource('baju', BajuController::class);
Route::resource('makeup', MakeupController::class);
Route::resource('pelaminan', PelaminanController::class);
Route::resource('order', OrderController::class);
Route::resource('transaksi', TransaksiController::class);


// Route untuk beranda
Route::get('/', function () {
    return view('login');
});

Route::get('/baju', [BajuController::class, 'index'])->name('baju.index');
Route::delete('/baju/{id}', [BajuController::class, 'destroy'])->name('baju.destroy');
Route::get('/makeup', [MakeupController::class, 'index'])->name('makeup.index');
Route::delete('/makeup/{id}', [MakeupController::class, 'destroy'])->name('makeup.destroy');
Route::get('/pelaminan', [PelaminanController::class, 'index'])->name('pelaminan.index');
Route::delete('/pelaminan/{id}', [PelaminanController::class, 'destroy'])->name('pelaminan.destroy');
Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
Route::delete('/paket/{id}', [PaketController::class, 'destroy'])->name('paket.destroy');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

Route::get('/', [HomeController::class, 'index'])->name('login');
Route::get('/', [HomeController::class, 'index'])->name('home');
