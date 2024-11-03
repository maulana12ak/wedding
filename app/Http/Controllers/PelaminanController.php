<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Pelaminan;
use Illuminate\Http\Request;

class PelaminanController extends Controller
{
    // Tampilkan semua data baju
    public function index()
    {
        $pelaminans = Pelaminan::all();
        return view('pelaminan.index', compact('pelaminans'));
    }

    // Tampilkan form untuk membuat baju baru
    public function create()
    {
        return view('pelaminan.create');
    }

    // Simpan baju baru
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_pelaminan' => 'required',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        // Simpan data baru ke dalam database
        Baju::create([
            'nama_pelaminan' => $request->input('nama_pelaminan'),
            'harga_sewa' => $request->input('harga_sewa'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelaminan.index')->with('success', 'Data pelaminan berhasil ditambahkan.');
    }

    // Tampilkan form untuk mengedit baju
    public function edit($id)
    {
        // Cari data baju berdasarkan ID
        $pelaminan = Baju::findOrFail($id);

        // Tampilkan view edit dan kirimkan data baju
        return view('pelaminan.edit', compact('pelaminan'));
    }

    // Perbarui data baju yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_pelaminan' => 'required',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        // Cari data baju berdasarkan ID
        $pelaminan = Pelaminan::findOrFail($id);

        // Update data baju dengan data dari request
        $pelaminan->update([
            'nama_pelaminan' => $request->input('nama_pelaminan'),
            'harga_sewa' => $request->input('harga_sewa'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelaminan.index')->with('success', 'Data pelaminan berhasil diperbarui.');
    }

    // Hapus data baju
    public function destroy($id)
    {
        // Cari data baju berdasarkan ID
        $pelaminan = Pelaminan::findOrFail($id);

        // Hapus data baju
        $pelaminan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelaminan.index')->with('success', 'Data pelaminan berhasil dihapus.');
    }
}
