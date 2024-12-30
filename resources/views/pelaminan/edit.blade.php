@extends('layouts.layout')

@section('content')
    <h2>Edit Pelaminan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pelaminan.update', $pelaminan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_pelaminan" class="form-label">Masukkan Nama Pelaminan</label>
            <input type="text" name="nama_pelaminan" class="form-control" id="nama_pelaminan" value="{{ $pelaminan->nama_pelaminan }}" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Masukkan Foto</label>
            <input type="file" name="foto" class="form-control" id="foto" value="{{ $pelaminan->foto }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Masukkan Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ $pelaminan->harga }}" step="100000" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
