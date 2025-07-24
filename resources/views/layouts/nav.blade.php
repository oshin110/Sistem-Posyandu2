<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-baby text-white text-xl"></i>
                    </div>
                    <span class="font-bold text-2xl text-primary-dark">Posyandu<span class="text-accent">Sehat</span></span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-dark hover:text-primary font-medium">Beranda</a>
                <a href="#layanan" class="text-dark hover:text-primary font-medium">Layanan</a>
                <a href="#tentang" class="text-dark hover:text-primary font-medium">Tentang</a>
                <a href="#kontak" class="text-dark hover:text-primary font-medium">Kontak</a>
                <a href="{{ route('admin.dashboard') }}" class="text-primary font-medium">
                    <i class="fas fa-user-md mr-2"></i>Admin
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <a href="{{ route('admin.dashboard') }}" class="text-primary mr-4">
                    <i class="fas fa-user-md"></i>
                </a>
                <button onclick="toggleMenu()" class="text-dark focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden py-4 border-t">
            <a href="/" class="block py-2 text-dark hover:text-primary">Beranda</a>
            <a href="#layanan" class="block py-2 text-dark hover:text-primary">Layanan</a>
            <a href="#tentang" class="block py-2 text-dark hover:text-primary">Tentang</a>
            <a href="#kontak" class="block py-2 text-dark hover:text-primary">Kontak</a>
        </div>
    </div>
</nav>