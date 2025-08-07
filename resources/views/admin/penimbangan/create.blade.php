@extends('layouts.admin')

@section('title', 'Tambah Data Penimbangan')

@section('content')
<div class="section">
    <div class="container">
        <div class="section-title">
            <h2>Tambah Data Penimbangan</h2>
            <p>Isi formulir berikut untuk menambahkan data penimbangan anak.</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan!</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('penimbangan.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="anak_id" class="form-label">Nama Anak</label>
                        <select name="anak_id" id="anak_id" class="form-select" required>
                            <option value="">-- Pilih Anak --</option>
                            @foreach($anaks as $anak)
                                <option value="{{ $anak->id }}" {{ old('anak_id') == $anak->id ? 'selected' : '' }}>
                                    {{ $anak->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Penimbangan</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
                        <input type="number" step="0.01" name="berat_badan" id="berat_badan" class="form-control" value="{{ old('berat_badan') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                        <input type="number" step="0.1" name="tinggi_badan" id="tinggi_badan" class="form-control" value="{{ old('tinggi_badan') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="lingkar_kepala" class="form-label">Lingkar Kepala (cm)</label>
                        <input type="number" step="0.1" name="lingkar_kepala" id="lingkar_kepala" class="form-control" value="{{ old('lingkar_kepala') }}" required>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('penimbangan.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection