<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Baju;
use App\Models\Pelaminan;
use App\Models\Makeup;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    // Tampilkan semua paket
    public function index()
    {
        $pakets = Paket::with(['baju', 'pelaminan', 'makeup'])->get();
        return view('paket.index', compact('pakets'));
    }

    // Form tambah paket baru
    public function create()
    {
        $bajus = Baju::all();
        $pelaminans = Pelaminan::all();
        $makeups = Makeup::all();
        return view('paket.create', compact('bajus', 'pelaminans', 'makeups'));
    }

    // Simpan paket baru
    public function store(Request $request)
{
    $request->validate([
        'nama_paket' => 'required',
        'baju_id' => 'required|exists:bajus,id',
        'pelaminan_id' => 'required|exists:pelaminans,id',
        'makeup_id' => 'required|exists:makeups,id',
    ]);

    // Mendapatkan harga dari masing-masing item
    $baju = Baju::findOrFail($request->baju_id);
    $pelaminan = Pelaminan::findOrFail($request->pelaminan_id);
    $makeup = Makeup::findOrFail($request->makeup_id);

    // Menghitung total harga
    $totalHarga = $baju->harga + $pelaminan->harga + $makeup->harga;

    // Menyimpan data paket dengan harga total
    Paket::create([
        'nama_paket' => $request->nama_paket,
        'baju_id' => $request->baju_id,
        'pelaminan_id' => $request->pelaminan_id,
        'makeup_id' => $request->makeup_id,
        'harga' => $totalHarga, // simpan total harga
    ]);

    return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_paket' => 'required',
        'baju_id' => 'required|exists:bajus,id',
        'pelaminan_id' => 'required|exists:pelaminans,id',
        'makeup_id' => 'required|exists:makeups,id',
    ]);

    $baju = Baju::findOrFail($request->baju_id);
    $pelaminan = Pelaminan::findOrFail($request->pelaminan_id);
    $makeup = Makeup::findOrFail($request->makeup_id);

    $totalHarga = $baju->harga + $pelaminan->harga + $makeup->harga;

    $paket = Paket::findOrFail($id);
    $paket->update([
        'nama_paket' => $request->nama_paket,
        'baju_id' => $request->baju_id,
        'pelaminan_id' => $request->pelaminan_id,
        'makeup_id' => $request->makeup_id,
        'harga' => $totalHarga,
    ]);

    return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui');
}

// Hapus data paket
public function destroy($id)
{
    // Cari data pelaminan berdasarkan ID
    $paket = Paket::findOrFail($id);

    // Hapus data paket
    $paket->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('paket.index')->with('success', 'Data paket berhasil dihapus.');
}
}
