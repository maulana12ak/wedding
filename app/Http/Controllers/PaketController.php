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
            'harga' => 'required|numeric',
        ]);

        Paket::create($request->all());

        return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
    }

    // Form edit paket
    public function edit($id)
    {
        $paket = Paket::findOrFail($id);
        $bajus = Baju::all();
        $pelaminans = Pelaminan::all();
        $makeups = Makeup::all();
        return view('paket.edit', compact('paket', 'bajus', 'pelaminans', 'makeups'));
    }

    // Update paket
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'baju_id' => 'required|exists:bajus,id',
            'pelaminan_id' => 'required|exists:pelaminans,id',
            'makeup_id' => 'required|exists:makeups,id',
            'harga' => 'required|numeric',
        ]);

        $paket = Paket::findOrFail($id);
        $paket->update($request->all());

        return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui');
    }

    // Hapus paket
    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);
        $paket->delete();

        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
    }
}

