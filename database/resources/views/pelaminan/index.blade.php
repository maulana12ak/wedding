@extends('layout')

@section('content')
    <h2>Daftar Pelaminan</h2>
    <a href="{{ route('pelaminan.create') }}" class="btn btn-primary">Tambah Pelaminan</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama_pelaminan</th>
                <th>harga_sewa</th>
                <th>deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelaminans as $pelaminan)
                <tr>
                    <td>{{ $pelaminan->nama }}</td>
                    <td>{{ $baju->harga_sewa }}</td>
                    <td>{{ $baju->deskripsi }}</td>
                    <td>
                        <a href="{{ route('pelaminan.show', $pelaminan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pelaminan.edit', $pelaminan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pelaminan.destroy', $pelaminan->id) }}" method="POST" class="d-inline">
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
