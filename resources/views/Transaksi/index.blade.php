@extends('layout')

@section('content')
    <h2>Daftar Transaksi</h2>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID Order</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->order->id }}</td>
                    <td>{{ $transaksi->tanggal }}</td>
                    <td>{{ 'Rp' . number_format($transaksi->total, 0, ',', '.') }}</td>
                    <td>{{ $transaksi->status }}</td>
                    <td>
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" class="d-inline" 
                            onsubmit="event.preventDefault(); 
                            Swal.fire({
                                title: 'Anda yakin?',
                                text: 'Data transaksi akan dihapus!',
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
