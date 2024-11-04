@extends('layout')

@section('content')
    <h2>Daftar Order</h2>
    <a href="{{ route('order.create') }}" class="btn btn-primary">Tambah Order</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">{{ $message }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID Paket</th>
                <th>Tanggal Order</th>
                <th>Tanggal Acara</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->idpaket }}</td>
                    <td>{{ $order->tgl_order }}</td>
                    <td>{{ $order->tgl_acara }}</td>
                    <td>{{ $order->tgl_selesai }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ 'Rp' . number_format($order->total, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="d-inline">
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
