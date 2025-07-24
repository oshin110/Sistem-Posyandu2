<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f2f4f7, #dfe9f3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            text-align: center;
            padding: 80px 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .hero-title {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .hero-description {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .btn-custom {
            padding: 10px 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="hero-section">
            <h1 class="hero-title">Selamat Datang di Posyandu</h1>
            <p class="hero-description">Bergabunglah dengan kami untuk mendukung pengelolaan data kesehatan yang lebih baik. Silakan login atau daftar untuk mulai menggunakan aplikasi.</p>
            <div class="d-flex justify-content-center gap-3">
                @yield('content')
                <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-custom">Register</a>
            </div>
        </div>
    </div>
</body>
</html>

