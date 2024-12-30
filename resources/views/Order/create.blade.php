@extends('layouts.layout')

@section('content')
    <h2>Tambah Order</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idpaket" class="form-label">Pilih Paket</label>
            <select name="idpaket" class="form-select" required>
                <option value="">-- Pilih Paket --</option>
                @foreach ($pakets as $paket)
                    <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_order" class="form-label">Tanggal Order</label>
            <input type="date" name="tgl_order" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tgl_acara" class="form-label">Tanggal Acara</label>
            <input type="date" name="tgl_acara" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tgl_selesai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" name="total" class="form-control" step="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
