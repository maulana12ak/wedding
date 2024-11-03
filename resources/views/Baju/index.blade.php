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
                <th>Foto</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bajus as $baju)
                <tr>
                    <td>{{ $baju->nama_baju }}</td>
                    <td>
                        @if ($baju->foto)
                        <img src="{{ asset('img/' . $baju->foto) }}" alt="" style="width: 70px ;">
                        @else
                                Tidak ada foto
                            @endif
                    </td>
                    <td>{{ 'Rp' . number_format($baju->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('baju.edit', $baju->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('baju.destroy', $baju->id) }}" method="POST" class="d-inline" 
                            onsubmit="event.preventDefault(); 
                            Swal.fire({
                                title: 'Anda yakin?',
                                text: 'Data baju akan dihapus!',
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
