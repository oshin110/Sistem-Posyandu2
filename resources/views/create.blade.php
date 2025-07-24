<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Anak - Sistem POSYANDU</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 20px;
        }
        .form-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .required-field::after {
            content: " *";
            color: red;
        }
        .back-button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Tambah Data Anak</h1>
                    <a href="{{ route('anak.index') }}" class="btn btn-outline-secondary back-button">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <form method="POST" action="{{ route('anak.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nik" class="form-label required-field">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" 
                               id="nik" name="nik" value="{{ old('nik') }}" 
                               placeholder="Masukkan NIK anak (16 digit)" required>
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="nama" class="form-label required-field">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                               id="nama" name="nama" value="{{ old('nama') }}" 
                               placeholder="Masukkan nama lengkap anak" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="tanggal_lahir" class="form-label required-field">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                               id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-4">
                        <label for="jenis_kelamin" class="form-label required-field">Jenis Kelamin</label>
                        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" 
                                id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-4">
                        <label for="ibu_id" class="form-label required-field">Nama Ibu</label>
                        <select class="form-select @error('ibu_id') is-invalid @enderror" 
                                id="ibu_id" name="ibu_id" required>
                            <option value="">Pilih Nama Ibu</option>
                            @foreach($ibu as $ibuItem)
                                <option value="{{ $ibuItem->id }}" {{ old('ibu_id') == $ibuItem->id ? 'selected' : '' }}>
                                    {{ $ibuItem->nama }} (NIK: {{ $ibuItem->nik }})
                                </option>
                            @endforeach
                        </select>
                        @error('ibu_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="berat_lahir" class="form-label required-field">Berat Lahir (kg)</label>
                        <div class="input-group">
                            <input type="number" step="0.01" class="form-control @error('berat_lahir') is-invalid @enderror" 
                                   id="berat_lahir" name="berat_lahir" value="{{ old('berat_lahir') }}" 
                                   placeholder="Contoh: 3.25" required>
                            <span class="input-group-text">kg</span>
                        </div>
                        @error('berat_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="panjang_lahir" class="form-label required-field">Panjang Lahir (cm)</label>
                        <div class="input-group">
                            <input type="number" step="0.01" class="form-control @error('panjang_lahir') is-invalid @enderror" 
                                   id="panjang_lahir" name="panjang_lahir" value="{{ old('panjang_lahir') }}" 
                                   placeholder="Contoh: 48.5" required>
                            <span class="input-group-text">cm</span>
                        </div>
                        @error('panjang_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="golongan_darah" class="form-label">Golongan Darah</label>
                        <select class="form-select @error('golongan_darah') is-invalid @enderror" 
                                id="golongan_darah" name="golongan_darah">
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A" {{ old('golongan_darah') == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('golongan_darah') == 'B' ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ old('golongan_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                            <option value="O" {{ old('golongan_darah') == 'O' ? 'selected' : '' }}>O</option>
                            <option value="-" {{ old('golongan_darah') == '-' ? 'selected' : '' }}>Tidak Tahu</option>
                        </select>
                        @error('golongan_darah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="foto" class="form-label">Foto Anak</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                               id="foto" name="foto" accept="image/*">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                    <textarea class="form-control @error('riwayat_penyakit') is-invalid @enderror" 
                              id="riwayat_penyakit" name="riwayat_penyakit" rows="2" 
                              placeholder="Masukkan riwayat penyakit jika ada">{{ old('riwayat_penyakit') }}</textarea>
                    @error('riwayat_penyakit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <button type="reset" class="btn btn-secondary me-md-2">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
