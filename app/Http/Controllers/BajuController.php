<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BajuController extends Controller
{
    // Tampilkan semua data baju
    public function index()
    {
        $bajus = Baju::all();
        return view('baju.index', compact('bajus'));
    }

    // Tampilkan form untuk membuat baju baru
    public function create()
    {
        return view('baju.create');
    }

    // Simpan baju baru
    public function store(Request $request)
    {
        
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_baju' => 'required',
            'harga' => 'required|numeric',
            'foto'=> 'image|file|max:5024',
        ]);

        $extension = $request->file('foto')->getClientOriginalExtension();

        $randomName = Str::random(20).'.'.$extension;

        $path = public_path('img');

        $request->file('foto')->move($path,$randomName);


       

        // Simpan data baru ke dalam database
        Baju::create([
            'nama_baju' => $request->input('nama_baju'),
            'foto' => $randomName,
            'harga' => $request->input('harga'),
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('baju.index')->with('success', 'Data baju berhasil ditambahkan.');
    }

    // Tampilkan form untuk mengedit baju
    public function edit($id)
    {
        // Cari data baju berdasarkan ID
        $baju = Baju::findOrFail($id);

        // Tampilkan view edit dan kirimkan data baju
        return view('baju.edit', compact('baju'));
    }

    
    // Perbarui data baju yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_baju' => 'required',
            'harga' => 'required|numeric',
            'foto'=> 'image|file|max:5024',
        ]);

        // Cari data baju berdasarkan ID
        $baju = Baju::findOrFail($id);

        $extension = $request->file('foto')->getClientOriginalExtension();

        $randomName = Str::random(20).'.'.$extension;

        $path = public_path('img');

        $request->file('foto')->move($path,$randomName);


        // Update data baju dengan data dari request
        $baju->update([
            'nama_baju' => $request->input('nama_baju'),
            'foto' => $randomName,
            'harga' => $request->input('harga'),
            
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('baju.index')->with('success', 'Data baju berhasil diperbarui.');
    }

    // Hapus data baju
    public function destroy($id)
    {
        // Cari data baju berdasarkan ID
        $baju = Baju::findOrFail($id);

        // Hapus data baju
        $baju->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('baju.index')->with('success', 'Data baju berhasil dihapus.');
    }
}
