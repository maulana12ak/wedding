@extends('layout')

@section('content')
    <h2>Edit Transaksi</h2>

    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id" class="form-label">Pilih Order</label>
            <select name="id" class="form-select" required>
                @foreach ($orders as $order)
                    <option value="{{ $order->id }}" {{ $transaksi->id == $order->id ? 'selected' : '' }}>
                        {{ $order->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $transaksi->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" name="total" class="form-control" step="1" value="{{ $transaksi->total }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="Pending" {{ $transaksi->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Paid" {{ $transaksi->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                <option value="Cancelled" {{ $transaksi->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
