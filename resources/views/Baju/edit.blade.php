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

    <form action="{{ route('baju.update', $baju->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_baju" class="form-label">Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" id="nama_baju" value="{{ $baju->nama_baju }}" required>
        </div>
        <div class="mb-3">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input type="text" name="ukuran" class="form-control" id="ukuran" value="{{ $baju->ukuran }}" required>
        </div>
        <div class="mb-3">
            <label for="harga_baju" class="form-label">Harga Baju</label>
            <input type="number" name="harga_baju" class="form-control" id="harga_baju" value="{{ $baju->harga_baju }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{ $baju->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
