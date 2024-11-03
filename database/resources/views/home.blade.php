<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vieea Wedding</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom sidebar styles */
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

    #sidebar .user-account .logout-link {
      color: #adb5bd;
    }

    #sidebar .user-account .logout-link:hover {
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div id="sidebar">
    <!-- Brand Section -->
    <div class="brand">
      <strong>Vieea Wedding</strong>
    </div>

    <!-- Content Section (Navigation) -->
    <nav class="nav flex-column">
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#">Paket</a>
      <a class="nav-link" href="#">Makeup</a>
      <a class="nav-link" href="{{ route('pelaminan.index')}}">Pelaminan</a>
      <a class="nav-link" href="{{ route('baju.index') }}">Baju</a>
    </nav>

    <!-- User Account Section -->
    <div class="user-account">
      <div class="user-name">John Doe</div>
      <a href="#" class="logout-link">Logout</a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
