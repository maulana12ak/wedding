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
                        <a href="{{ route('transaksis.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST" class="d-inline">
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
