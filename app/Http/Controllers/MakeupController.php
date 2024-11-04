<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MakeupController extends Controller
{
    // Tampilkan semua data makeup
    public function index()
    {
        $makeups = Makeup::all();
        return view('makeup.index', compact('makeups'));
    }

    // Tampilkan form untuk membuat makeup baru
    public function create()
    {
        return view('makeup.create');
    }

    // Simpan makeup baru
    public function store(Request $request)
    {
        
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_makeup' => 'required',
            'jenis'=>'required',
            'harga' => 'required|numeric',
        ]);
   

        // Simpan data baru ke dalam database
        Makeup::create([
            'nama_makeup' => $request->input('nama_makeup'),
            'jenis' => $request->input('nama_makeup'),
            'harga' => $request->input('harga'),
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('makeup.index')->with('success', 'Data makeup berhasil ditambahkan.');
    }

    // Tampilkan form untuk mengedit makeup
    public function edit($id)
    {
        // Cari data makeup berdasarkan ID
        $makeup = Makeup::findOrFail($id);

        // Tampilkan view edit dan kirimkan data makeup
        return view('makeup.edit', compact('makeup'));
    }

    
    // Perbarui data makeup yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_makeup' => 'required',
            'jenis'=>'required',
            'harga' => 'required|numeric',
        ]);

        // Cari data baju berdasarkan ID
        $makeup = Makeup::findOrFail($id);

        // Update data makeup dengan data dari request
        $makeup->update([
            'nama_makeup' => $request->input('nama_makeup'),
            'jenis' => $request->input('nama_makeup'),
            'harga' => $request->input('harga')
            
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('makeup.index')->with('success', 'Data makeup berhasil diperbarui.');
    }

    // Hapus data makeup
    public function destroy($id)
    {
        // Cari data makeup berdasarkan ID
        $makeup = Makeup::findOrFail($id);

        // Hapus data makeup
        $makeup->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('baju.index')->with('success', 'Data makeup berhasil dihapus.');
    }
}
