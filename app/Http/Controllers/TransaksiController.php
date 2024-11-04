<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Order;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with('order')->get();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $orders = Order::all();
        return view('transaksi.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_order' => 'required|exists:orders,id',
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
            'status' => 'required|in:Pending,Paid,Cancelled',
        ]);

        Transaksi::create($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit(Transaksi $transaksi)
    {
        $orders = Order::all();
        return view('transaksi.edit', compact('transaksi', 'orders'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'id_order' => 'required|exists:orders,id',
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
            'status' => 'required|in:Pending,Paid,Cancelled',
        ]);

        $transaksi->update($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
