@extends('layout')

@section('content')
    <h2>Edit Order</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="idpaket" class="form-label">Pilih Paket</label>
            <select name="idpaket" class="form-select" required>
                <option value="">-- Pilih Paket --</option>
                @foreach ($pakets as $paket)
                    <option value="{{ $paket->id }}" {{ $order->idpaket == $paket->id ? 'selected' : '' }}>
                        {{ $paket->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_order" class="form-label">Tanggal Order</label>
            <input type="date" name="tgl_order" class="form-control" value="{{ $order->tgl_order }}" required>
        </div>
        <div class="mb-3">
            <label for="tgl_acara" class="form-label">Tanggal Acara</label>
            <input type="date" name="tgl_acara" class="form-control" value="{{ $order->tgl_acara }}" required>
        </div>
        <div class="mb-3">
            <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tgl_selesai" class="form-control" value="{{ $order->tgl_selesai }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Confirmed" {{ $order->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" name="total" class="form-control" step="1" value="{{ $order->total }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
