@extends('layout')

@section('content')
    <h2>Daftar Baju</h2>
    <a href="{{ route('baju.create') }}" class="btn btn-primary">Tambah Baju</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Baju</th>
                <th>Ukuran</th>
                <th>Harga Sewa</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bajus as $baju)
                <tr>
                    <td>{{ $baju->nama_baju }}</td>
                    <td>{{ $baju->ukuran }}</td>
                    <td>{{ $baju->harga_sewa}}</td>
                    <td>{{ $baju->deskripsi }}</td>
                    <td>
                        <a href="{{ route('baju.show', $baju->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('baju.edit', $baju->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('baju.destroy', $baju->id) }}" method="POST" class="d-inline">
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
