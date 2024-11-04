<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Paket; // Untuk menampilkan data paket
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('paket')->get(); // Menampilkan data order dengan paket
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        $pakets = Paket::all(); // Ambil semua paket untuk dropdown
        return view('order.create', compact('pakets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idpaket' => 'required|exists:pakets,id',
            'tgl_order' => 'required|date',
            'tgl_acara' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_acara',
            'status' => 'required|string',
            'total' => 'required|numeric',
        ]);

        Order::create($request->all());

        return redirect()->route('order.index')->with('success', 'Order berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $pakets = Paket::all(); // Ambil semua paket untuk dropdown
        return view('order.edit', compact('order', 'paket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'idpaket' => 'required|exists:paket,id',
            'tgl_order' => 'required|date',
            'tgl_acara' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_acara',
            'status' => 'required|string',
            'total' => 'required|numeric',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('order.index')->with('success', 'Order berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('order.index')->with('success', 'Order berhasil dihapus.');
    }
}
