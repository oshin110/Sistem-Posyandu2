@extends('layouts.admin')
@section('title', 'Dashboard')

@push('styles')
<style>
  /* Efek hover mengangkat kartu */
  .card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
  }
  .card-hover {
    transition: transform .3s, box-shadow .3s;
  }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">
  <!-- Header -->
  <div class="text-center mb-5">
    <h2 class="fw-bold text-success">Selamat Datang di Dashboard Posyandu</h2>
    <p class="text-muted">Pantau data ibu, anak, dan penimbangan secara real-time</p>
  </div>

  <!-- Statistik Cards -->
  <div class="row g-4">
    <!-- Data Ibu dan Anak -->
    <div class="col-12 col-md-12 col-lg-6">
      <div class="row g-4">
        <!-- Data Ibu -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card card-hover border-success shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="bg-success text-white rounded-circle p-3 me-3">
                  <i class="fas fa-female fs-3"></i>
                </div>
                <div>
                  <h5 class="mb-1 text-success">Data Ibu</h5>
                  <h2 class="fw-bold">{{ $totalIbu }}</h2>
                </div>
              </div>
              <a href="{{ route('ibu.index') }}" class="mt-auto text-success fw-medium">
                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Data Anak -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card card-hover border-success shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="bg-success text-white rounded-circle p-3 me-3">
                  <i class="fas fa-baby fs-3"></i>
                </div>
                <div>
                  <h5 class="mb-1 text-success">Data Anak</h5>
                  <h2 class="fw-bold">{{ $totalAnak }}</h2>
                </div>
              </div>
              <a href="{{ route('anak.index') }}" class="mt-auto text-success fw-medium">
                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Penimbangan dan Imunisasi -->
    <div class="col-12 col-md-12 col-lg-6">
      <div class="row g-4">
        <!-- Penimbangan -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card card-hover border-success shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="bg-success text-white rounded-circle p-3 me-3">
                  <i class="fas fa-weight fs-3"></i>
                </div>
                <div>
                  <h5 class="mb-1 text-success">Penimbangan</h5>
                  <h2 class="fw-bold">{{ $totalPenimbangan }}</h2>
                </div>
              </div>
              <a href="{{ route('penimbangan.index') }}" class="mt-auto text-success fw-medium">
                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Imunisasi -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card card-hover border-success shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <div class="d-flex align-items-center mb-4">
                <div class="bg-success text-white rounded-circle p-3 me-3">
                  <i class="fas fa-syringe fs-3"></i>
                </div>
                <div>
                  <h5 class="mb-1 text-success">Imunisasi</h5>
                  <h2 class="fw-bold">{{ $totalImunisasi }}</h2>
                </div>
              </div>
              <a href="{{ route('imunisasi.index') }}" class="mt-auto text-success fw-medium">
                Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

