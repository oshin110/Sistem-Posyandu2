<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Posyandu Sehat')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tambahan dari halaman lain --}}
    @stack('styles')
</head>
<body>

    {{-- Navigasi --}}
    @includeIf('layouts.nav')

    {{-- Konten Utama --}}
    <main class="container py-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    @includeIf('layouts.footer')

    {{-- Script Global --}}
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu) menu.classList.toggle('hidden');
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
    {{-- Bootstrap Bundle with Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-q2aXJlv0rJMSf3ngSBMtyxHgkdjndiV6CygzxhZmlSOgZRnqdEjvkSBH7qznU8ueF"
            crossorigin="anonymous"></script>
    {{-- Tambahan dari halaman --}}
    @stack('scripts')
</body>
</html>
