<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Posyandu')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #388e3c;
            --accent: #4caf50;
            --dark: #333;
            --gray: #777;
            --light-gray: #e0e0e0;
            --shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        body { margin: 0; font-family: 'Segoe UI', sans-serif; }
        .admin-sidebar {
            width: 250px;
            background-color: var(--primary-dark);
            color: white;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 70px;
            transition: all 0.3s;
        }
        .admin-sidebar.collapsed { width: 70px; }
        .admin-content { margin-left: 250px; transition: all 0.3s; }
        .admin-sidebar.collapsed + .admin-content { margin-left: 70px; }
        .admin-header {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            height: 70px;
            z-index: 100;
            display: flex;
            align-items: center;
            padding: 0 20px;
            transition: all 0.3s;
        }
        .admin-sidebar.collapsed + .admin-content .admin-header { left: 70px; }
        .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 15px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: 0.3s;
        }
        .nav-link i { margin-right: 15px; width: 24px; text-align: center; }
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-left: 4px solid var(--accent);
        }
        .collapsed .nav-link span,
        .collapsed .logo span,
        .collapsed .nav-link i { display: none; }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .toggle-sidebar {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .dropdown-menu.show {
            display: block;
        }
    </style>
    @stack('styles')
</head>
<body>

<div class="admin-sidebar" id="sidebar">
    <div class="logo">
        <i class="fas fa-baby"></i> <span>Admin Posyandu</span>
    </div>
    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin.dashboard') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
    </a>
    <a href="{{ route('ibu.index') }}" class="nav-link {{ request()->is('ibu*') ? 'active' : '' }}">
        <i class="fas fa-female"></i> <span>Data Ibu</span>
    </a>
    <a href="{{ route('anak.index') }}" class="nav-link {{ request()->is('anak*') ? 'active' : '' }}">
        <i class="fas fa-baby"></i> <span>Data Anak</span>
    </a>
    <a href="#" class="nav-link"><i class="fas fa-weight"></i> <span>Penimbangan</span></a>

</div>

<div class="admin-content">
    <div class="admin-header d-flex justify-content-between">
        <button class="toggle-sidebar" id="toggleSidebar"><i class="fas fa-bars"></i></button>
        <div class="d-flex align-items-center">
            <div class="me-3">
                <div class="fw-bold">Admin Posyandu</div>
                <div class="text-muted" style="font-size: 0.875rem;">Super Admin</div>
            </div>
            <div class="dropdown">
                <img src="https://ui-avatars.com/api/?name=Admin+Posyandu&background=4CAF50&color=fff"
                     alt="Avatar" class="rounded-circle" style="width: 40px; height: 40px; cursor: pointer;"
                     id="userDropdown" data-bs-toggle="dropdown">
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Pengaturan</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-2"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main class="container pt-5 mt-4">
        @yield('content')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('collapsed');
        document.querySelector('.admin-content').classList.toggle('collapsed');
    });
</script>

</body>
</html>
