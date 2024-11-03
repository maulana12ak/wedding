<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vieea Wedding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    #sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    #sidebar .brand {
      color: #fff;
      font-size: 24px;
      text-align: center;
      margin-bottom: 30px;
    }
    #sidebar .nav-link {
      color: #adb5bd;
      font-size: 18px;
      margin: 5px 0;
    }
    #sidebar .nav-link:hover {
      color: #fff;
    }
    #sidebar .user-account {
      color: #adb5bd;
      text-align: center;
    }
    #sidebar .user-account .user-name {
      margin-bottom: 5px;
    }
    #sidebar .user-account .logout-link:hover {
      color: #fff;
    }
    .content {
      margin-left: 270px;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div id="sidebar">
    <div class="brand">
      <strong>Vieea Wedding</strong>
    </div>
    <nav class="nav flex-column">
      <a class="nav-link" href="{{ route('home') }}">Home</a>
      <a class="nav-link" href="#">Paket</a>
      <a class="nav-link" href="#">Makeup</a>
      <a class="nav-link" href="{{ route('pelaminan.index')}}">Pelaminan</a>
      <a class="nav-link" href="{{ route('baju.index') }}">Baju</a>
    </nav>
    <div class="user-account">
      <a href="#" class="logout-link">Logout</a>
    </div>
  </div>

  <div class="content">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
