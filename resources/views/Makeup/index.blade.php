@extends('layout')

@section('content')
    <h2>Daftar Makeup</h2>
    <a href="{{ route('makeup.create') }}" class="btn btn-primary">Tambah Makeup</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Makeup</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makeups as $makeup)
                <tr>
                    <td>{{ $makeup->nama_makeup }}</td>
                    <td>{{ $makeup->jenis }}</td>
                    <td>{{ 'Rp' . number_format($makeup->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('makeup.edit', $makeup->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('makeup.destroy', $makeup->id) }}" method="POST" class="d-inline" 
                            onsubmit="event.preventDefault(); 
                            Swal.fire({
                                title: 'Anda yakin?',
                                text: 'Data makeup akan dihapus!',
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
