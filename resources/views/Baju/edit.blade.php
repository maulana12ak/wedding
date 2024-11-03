@extends('layout')

@section('content')
    <h2>Edit Baju</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('baju.update', $baju->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_baju" class="form-label">Masukkan Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" id="nama_baju" value="{{ $baju->nama_baju }}" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Masukkan Foto</label>
            <input type="file" name="foto" class="form-control" id="foto" value="{{ $baju->foto }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Masukkan Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ $baju->harga }}" step="100000" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
