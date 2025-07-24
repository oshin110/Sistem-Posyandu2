<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f2f4f7, #dfe9f3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-card {
            margin-top: 10vh;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 40px;
        }

        .btn-custom {
            padding: 10px 30px;
            font-weight: bold;
        }

        .title-highlight {
            color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="main-card text-center w-100" style="max-width: 600px;">
        <h1 class="mb-4">Selamat Datang di <span class="title-highlight">Web Posyandu</span></h1>
        <p class="mb-4">Sistem ini dibuat untuk mendukung pengelolaan data yang lebih baik. Silakan login atau daftar untuk mulai menggunakan aplikasi.</p>

        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary btn-custom">Register</a>
        </div>
    </div>
</div>

</body>
</html>