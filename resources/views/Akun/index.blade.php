@extends('layouts.layout')

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
                <th>Nama Pelaminan</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelaminans as $pelaminan)
                <tr>
                    <td>{{ $pelaminan->nama_pelaminan }}</td>
                    <td>
                        @if ($pelaminan->foto)
                        <img src="{{ asset('img/' . $pelaminan->foto) }}" alt="" style="width: 70px ;">
                        @else
                                Tidak ada foto
                            @endif
                    </td>
                    <td>{{ 'Rp' . number_format($pelaminan->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pelaminan.edit', $pelaminan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pelaminan.destroy', $pelaminan->id) }}" method="POST" class="d-inline" 
                            onsubmit="event.preventDefault(); 
                            Swal.fire({
                                title: 'Anda yakin?',
                                text: 'Data pelaminan akan dihapus!',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Hapus',
                                cancelButtonText: 'Batal',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    this.submit();
                                }
                            });">
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
