@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Paket Pernikahan</h1>
    <a href="{{ route('paket.create') }}" class="btn btn-primary mb-3">Tambah Paket</a>

    @if ($paket->isEmpty())
        <div class="alert alert-info">Tidak ada paket pernikahan yang tersedia.</div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Fasilitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paket as $item)
                    <tr>
                        <td>{{ $item->nama_paket }}</td>
                        <td>Rp {{ number_format($item->harga, 2) }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->fasilitas }}</td>
                        <td>
                            <a href="{{ route('paket.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('paket.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
