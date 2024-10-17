<?php

namespace App\Http\Controllers;

use App\Models\PaketPernikahan;
use Illuminate\Http\Request;

class PaketPernikahanController extends Controller
{
    public function index()
    {
        $paketPernikahan = PaketPernikahan::all();
        return view('paket.index', compact('paketPernikahan'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fotoName = null;
        if ($request->file('foto')) {
            $fotoName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $fotoName);
        }

        PaketPernikahan::create([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'fasilitas' => $request->fasilitas,
            'foto' => $fotoName
        ]);

        return redirect()->route('paket.index')->with('success', 'Paket Pernikahan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $paketPernikahan = PaketPernikahan::findOrFail($id);
        return view('paket.edit', compact('paketPernikahan'));
    }

    public function update(Request $request, $id)
    {
        $paketPernikahan = PaketPernikahan::findOrFail($id);

        $request->validate([
            'nama_paket' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'fasilitas' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fotoName = $paketPernikahan->foto;
        if ($request->file('foto')) {
            $fotoName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $fotoName);
        }

        $paketPernikahan->update([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'fasilitas' => $request->fasilitas,
            'foto' => $fotoName
        ]);

        return redirect()->route('paket.index')->with('success', 'Paket Pernikahan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $paketPernikahan = PaketPernikahan::findOrFail($id);
        if ($paketPernikahan->foto) {
            unlink(public_path('images/'.$paketPernikahan->foto));
        }
        $paketPernikahan->delete();

        return redirect()->route('paket.index')->with('success', 'Paket Pernikahan berhasil dihapus');
    }
}
