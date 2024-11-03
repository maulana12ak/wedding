@extends('layout')

@section('content')
    <h2>Tambah Baju Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('baju.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_baju" class="form-label">Nama Baju</label>
            <input type="text" name="nama_baju" class="form-control" id="nama_baju" required>
        </div>
        <div class="mb-3">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input type="text" name="ukuran" class="form-control" id="ukuran" required>
        </div>
        <div class="mb-3">
            <label for="harga_sewa" class="form-label">Harga Sewa</label>
            <input type="number" name="harga_sewa" class="form-control" id="harga_sewa" step="100000" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
