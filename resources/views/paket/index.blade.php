@extends('layout')

@section('content')
<h2>Daftar Paket</h2>
<a href="{{ route('paket.create') }}" class="btn btn-primary">Tambah Paket</a>

@if ($message = Session::get('success'))
    <div class="alert alert-success mt-2">
        {{ $message }}
    </div>
@endif

<table class="table mt-3">
    <thead>
        <tr>
            <th>Nama Paket</th>
            <th>Baju</th>
            <th>Pelaminan</th>
            <th>Makeup</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pakets as $paket)
            <tr>
                <td>{{ $paket->nama_paket }}</td>
                <td>{{ $paket->baju->nama_baju ?? '-' }}</td>
                <td>{{ $paket->pelaminan->nama_pelaminan ?? '-' }}</td>
                <td>{{ $paket->makeup->nama_makeup ?? '-' }}</td>
                <td>Rp{{ number_format($paket->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('paket.edit', $paket->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('paket.destroy', $paket->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus paket ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
