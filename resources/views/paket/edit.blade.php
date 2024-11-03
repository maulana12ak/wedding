@extends('layout')

@section('content')
<h2>{{ isset($paket) ? 'Edit Paket' : 'Tambah Paket' }}</h2>

<form action="{{ isset($paket) ? route('paket.update', $paket->id) : route('paket.store') }}" method="POST">
    @csrf
    @if(isset($paket))
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="nama_paket" class="form-label">Nama Paket</label>
        <input type="text" name="nama_paket" class="form-control" id="nama_paket" value="{{ $paket->nama_paket ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="baju_id" class="form-label">Pilih Baju</label>
        <select name="baju_id" class="form-control" required>
            @foreach($bajus as $baju)
                <option value="{{ $baju->id }}" {{ isset($paket) && $paket->baju_id == $baju->id ? 'selected' : '' }}>
                    {{ $baju->nama_baju }}
                </option>
            @endforeach
        </select>
    </div>
    <!-- Lakukan hal yang sama untuk Pelaminan dan Makeup -->
    <button type="submit" class="btn btn-primary">{{ isset($paket) ? 'Perbarui' : 'Simpan' }}</button>
</form>
@endsection
