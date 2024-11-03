<?php

namespace App\Http\Controllers;

use App\Models\Pelaminan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PelaminanController extends Controller
{
    // Tampilkan semua data pelaminan
    public function index()
    {
        $pelaminans = Pelaminan::all();
        return view('pelaminan.index', compact('pelaminans'));
    }

    // Tampilkan form untuk membuat pelaminan baru
    public function create()
    {
        return view('pelaminan.create');
    }

    // Simpan pelaminan baru
    public function store(Request $request)
    {
        
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_pelaminan' => 'required',
            'harga' => 'required|numeric',
            'foto'=> 'image|file|max:5024',
        ]);

        $extension = $request->file('foto')->getClientOriginalExtension();

        $randomName = Str::random(20).'.'.$extension;

        $path = public_path('img');

        $request->file('foto')->move($path,$randomName);


       

        // Simpan data baru ke dalam database
        Pelaminan::create([
            'nama_pelaminan' => $request->input('nama_pelaminan'),
            'foto' => $randomName,
            'harga' => $request->input('harga'),
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelaminan.index')->with('success', 'Data pelaminan berhasil ditambahkan.');
    }

    // Tampilkan form untuk mengedit pelaminan
    public function edit($id)
    {
        // Cari data baju berdasarkan ID
        $pelaminan = Pelaminan::findOrFail($id);

        // Tampilkan view edit dan kirimkan data pelaminan
        return view('pelaminan.edit', compact('pelaminan'));
    }

    
    // Perbarui data pelaminan yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_pelaminan' => 'required',
            'harga' => 'required|numeric',
            'foto'=> 'image|file|max:5024',
        ]);

        // Cari data pelaminan berdasarkan ID
        $pelaminan = Pelaminan::findOrFail($id);

        $extension = $request->file('foto')->getClientOriginalExtension();

        $randomName = Str::random(20).'.'.$extension;

        $path = public_path('img');

        $request->file('foto')->move($path,$randomName);


        // Update data baju dengan data dari request
        $pelaminan->update([
            'nama_pelaminan' => $request->input('nama_pelaminan'),
            'foto' => $randomName,
            'harga' => $request->input('harga'),
            
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelaminan.index')->with('success', 'Data pelaminan berhasil diperbarui.');
    }

    // Hapus data pelaminan
    public function destroy($id)
    {
        // Cari data pelaminan berdasarkan ID
        $pelaminan = Pelaminan::findOrFail($id);

        // Hapus data pelaminan
        $pelaminan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelaminan.index')->with('success', 'Data pelaminan berhasil dihapus.');
    }
}
