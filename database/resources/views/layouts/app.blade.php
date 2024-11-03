<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wedding Organizer')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 15px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            margin-bottom: 10px;
            background-color: #e9ecef;
            text-decoration: none;
            border-radius: 5px;
            color: #333;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Wedding Organizer</h3>

    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @else
        <a href="{{ route('akun.index') }}">Akun</a>
        <a href="{{ route('baju.index') }}">Baju</a>
        <a href="{{ route('pelaminan.index') }}">Pelaminan</a>
        <a href="{{ route('paket.index') }}">Paket</a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger btn-block">Logout</button>
        </form>
    @endguest
    </div>


    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
