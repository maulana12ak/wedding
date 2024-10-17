<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Organizer</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Wedding Organizer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('akun.index') }}">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('baju.index') }}">Baju</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelaminan.index') }}">Pelaminan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paket.index') }}">Paket</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Selamat Datang di Wedding Organizer</h1>
        <p class="text-center">Silakan pilih menu di atas untuk mengelola data Akun, Baju, Pelaminan, dan Paket pernikahan.</p>

        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Akun</h5>
                        <p class="card-text">Kelola data pengguna dan akun wedding organizer.</p>
                        <a href="{{ route('akun.index') }}" class="btn btn-primary">Kelola Akun</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Baju</h5>
                        <p class="card-text">Kelola koleksi baju pernikahan yang tersedia.</p>
                        <a href="{{ route('baju.index') }}" class="btn btn-primary">Kelola Baju</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Pelaminan</h5>
                        <p class="card-text">Kelola opsi dekorasi pelaminan untuk acara.</p>
                        <a href="{{ route('pelaminan.index') }}" class="btn btn-primary">Kelola Pelaminan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Paket</h5>
                        <p class="card-text">Kelola paket pernikahan yang ditawarkan.</p>
                        <a href="{{ route('paket.index') }}" class="btn btn-primary">Kelola Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
