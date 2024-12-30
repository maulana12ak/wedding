@extends('layouts.layout')

@section('content')
    <h2>Edit Makeup</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('makeup.update', $makeup->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_makeup" class="form-label">Masukkan Nama Pelaminan</label>
            <input type="text" name="nama_makeup" class="form-control" id="nama_makeup" value="{{ $pelaminan->nama_makeup }}" required>
        </div>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" name="jenis" class="form-control" id="jenis" value="{{ $makeup->jenis ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Masukkan Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ $makeup->harga }}" step="100000" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
