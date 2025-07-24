@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

<!-- Statistik -->
<div class="admin-stats">
    <div class="card bg-white shadow-md hover:shadow-lg transition duration-500">
        <div class="card-body flex items-center justify-between">
            <div class="flex items-center">
                <div class="stat-icon bg-blue-100 rounded-full p-4 mr-4">
                    <i class="fas fa-female text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-lg font-semibold">Data Ibu</h4>
                    <p class="text-gray-600">{{ $totalIbu }}</p>
                </div>
            </div>
            <a href="{{ route('ibu.index') }}" class="text-blue-600 hover:text-blue-900 transition">
                Lihat Detail
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>

    <div class="card bg-white shadow-md hover:shadow-lg transition duration-500">
        <div class="card-body flex items-center justify-between">
            <div class="flex items-center">
                <div class="stat-icon bg-green-100 rounded-full p-4 mr-4">
                    <i class="fas fa-baby text-green-600 text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-lg font-semibold">Data Anak</h4>
                    <p class="text-gray-600">{{ $totalAnak }}</p>
                </div>
            </div>
            <a href="{{ route('anak.index') }}" class="text-green-600 hover:text-green-900 transition">
                Lihat Detail
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>

    <div class="card bg-white shadow-md hover:shadow-lg transition duration-500">
        <div class="card-body flex items-center justify-between">
            <div class="flex items-center">
                <div class="stat-icon bg-yellow-100 rounded-full p-4 mr-4">
                    <i class="fas fa-weight text-yellow-600 text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-lg font-semibold">Penimbangan</h4>
                    <p class="text-gray-600">{{ $totalPenimbangan }}</p>
                </div>
            </div>
            <a href="{{ route('penimbangan.index') }}" class="text-yellow-600 hover:text-yellow-900 transition">
                Lihat Detail
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>

@endsection
