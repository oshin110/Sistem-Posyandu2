@extends('layouts.app')

@section('title', 'Beranda - Posyandu Sehat')
@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-r from-primary to-primary-dark text-white">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Layanan Kesehatan Ibu dan Anak Terpadu</h1>
            <p class="text-xl mb-8">Memantau tumbuh kembang anak dan kesehatan ibu dengan teknologi modern untuk generasi Indonesia yang lebih sehat.</p>
            <div class="flex flex-wrap gap-4">
                <a href="#layanan" class="btn btn-outline">Lihat Layanan</a>
                <a href="{{ route('admin.dashboard') }}" class="btn bg-white text-primary hover:bg-gray-100">Login Admin</a>
            </div>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <div class="relative">
                <div class="bg-white bg-opacity-20 rounded-full w-80 h-80 flex items-center justify-center">
                    <div class="bg-white bg-opacity-30 rounded-full w-64 h-64 flex items-center justify-center">
                        <img src="https://cdn.pixabay.com/photo/2018/02/04/11/42/baby-3129267_960_720.png" alt="Ibu dan Anak" class="w-48">
                    </div>
                </div>
                <div class="absolute -bottom-6 -left-6 bg-accent rounded-full w-24 h-24 flex items-center justify-center shadow-lg">
                    <i class="fas fa-heartbeat text-white text-4xl"></i>
                </div>
                <div class="absolute -top-6 -right-6 bg-secondary rounded-full w-24 h-24 flex items-center justify-center shadow-lg">
                    <i class="fas fa-stethoscope text-white text-4xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="layanan" class="section bg-light">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2>Layanan Kami</h2>
            <p>Berbagai layanan kesehatan yang kami sediakan untuk ibu dan anak demi tumbuh kembang yang optimal</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1516585427167-9f4af9627e6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pemeriksaan Ibu Hamil" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Pemeriksaan Ibu Hamil</h3>
                    <p class="text-gray-600 mb-4">Pemeriksaan rutin untuk memantau kesehatan ibu dan janin selama masa kehamilan.</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Penimbangan Balita" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Penimbangan Balita</h3>
                    <p class="text-gray-600 mb-4">Pemantauan rutin berat badan dan tinggi badan untuk memastikan tumbuh kembang optimal.</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Imunisasi" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Imunisasi</h3>
                    <p class="text-gray-600 mb-4">Vaksinasi lengkap untuk mencegah penyakit berbahaya pada anak-anak.</p>
                    <a href="#" class="text-primary font-medium flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold mb-2">1,250+</div>
                <div class="text-lg">Ibu Terdaftar</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">2,800+</div>
                <div class="text-lg">Anak Terdaftar</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">15+</div>
                <div class="text-lg">Tenaga Medis</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">8</div>
                <div class="text-lg">Lokasi Posyandu</div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="tentang" class="section">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <img src="https://images.unsplash.com/photo-1512672378591-74ffa94f5b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tentang Posyandu Sehat" class="rounded-2xl shadow-xl">
            </div>
            <div class="md:w-1/2 md:pl-12">
                <h2 class="text-3xl font-bold text-primary-dark mb-6">Tentang Posyandu Sehat</h2>
                <p class="text-gray-700 mb-6">Posyandu Sehat adalah pusat layanan kesehatan ibu dan anak yang menyediakan berbagai layanan untuk memantau dan mendukung tumbuh kembang anak serta kesehatan ibu.</p>
                <p class="text-gray-700 mb-6">Dengan tenaga medis profesional dan fasilitas modern, kami berkomitmen untuk memberikan pelayanan terbaik bagi masyarakat.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3"></i>
                        <span>Pelayanan berbasis teknologi digital</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3"></i>
                        <span>Tenaga medis profesional dan berpengalaman</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3"></i>
                        <span>Pencatatan dan pemantauan berkala</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-3"></i>
                        <span>Konsultasi kesehatan gratis</span>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-light">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2>Apa Kata Mereka</h2>
            <p>Testimoni dari ibu-ibu yang telah menggunakan layanan Posyandu Sehat</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16" />
                    <div class="ml-4">
                        <h4 class="font-bold text-lg">Siti Rahayu</h4>
                        <p class="text-gray-600">Ibu dari Ananda</p>
                    </div>
                </div>
                <p class="text-gray-700">"Layanan Posyandu Sehat sangat membantu saya memantau perkembangan anak saya. Petugasnya ramah dan profesional."</p>
                <div class="flex mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16" />
                    <div class="ml-4">
                        <h4 class="font-bold text-lg">Dewi Anggraini</h4>
                        <p class="text-gray-600">Ibu Hamil</p>
                    </div>
                </div>
                <p class="text-gray-700">"Pemeriksaan kehamilan di Posyandu Sehat sangat lengkap. Saya merasa lebih tenang dengan pemantauan rutin dari dokter."</p>
                <div class="flex mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16" />
                    <div class="ml-4">
                        <h4 class="font-bold text-lg">Budi Santoso</h4>
                        <p class="text-gray-600">Ayah dari Kirana</p>
                    </div>
                </div>
                <p class="text-gray-700">"Sistem digitalnya memudahkan saya melihat perkembangan anak kapan saja. Tidak perlu repot bawa buku KMS lagi."</p>
                <div class="flex mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="kontak" class="section bg-primary text-white">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2>Hubungi Kami</h2>
            <p>Punya pertanyaan? Silakan hubungi kami melalui form berikut</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block mb-2">Nama Lengkap</label>
                        <input type="text" id="name" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white">
                    </div>
                    <div>
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white">
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="subject" class="block mb-2">Subjek</label>
                    <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white">
                </div>
                
                <div class="mb-6">
                    <label for="message" class="block mb-2">Pesan</label>
                    <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white"></textarea>
                </div>
                
                <button type="submit" class="btn bg-white text-primary hover:bg-gray-100">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>

@endsection