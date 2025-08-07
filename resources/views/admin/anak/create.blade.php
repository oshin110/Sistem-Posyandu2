@extends('layouts.admin')

@section('title', isset($anak) ? 'Edit Anak' : 'Tambah Anak')

@section('content')
<div class="section">
    <div class="container">
        <div class="section-title">
            <h2>{{ isset($anak) ? 'Edit Data Anak' : 'Tambah Data Anak' }}</h2>
            <p>{{ isset($anak) ? 'Perbarui informasi anak berikut.' : 'Isi form untuk menambahkan data anak baru.' }}</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ isset($anak) ? route('anak.update', $anak->id) : route('anak.store') }}" method="POST">
                    @csrf
                    @if(isset($anak))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{ old('nik', $anak->nik ?? '') }}" required maxlength="16">
                    </div>

                    <div class="mb-3">
                        <label for="nama">Nama Anak</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $anak->nama ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $anak->tanggal_lahir ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="L" {{ old('jenis_kelamin', $anak->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin', $anak->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="berat_lahir">Berat Lahir (kg)</label>
                        <input type="number" step="0.01" name="berat_lahir" class="form-control" value="{{ old('berat_lahir', $anak->berat_lahir ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="panjang_lahir">Panjang Lahir (cm)</label>
                        <input type="number" step="0.1" name="panjang_lahir" class="form-control" value="{{ old('panjang_lahir', $anak->panjang_lahir ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="ibu_id">Nama Ibu</label>
                        <select name="ibu_id" class="form-control" required>
                            <option value="">-- Pilih Ibu --</option>
                            @foreach($ibu as $i)
                                <option value="{{ $i->id }}" {{ old('ibu_id', $anak->ibu_id ?? '') == $i->id ? 'selected' : '' }}>{{ $i->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('anak.index') }}" class="btn btn-outline">Batal</a>
                        <button type="submit" class="btn btn-primary">{{ isset($anak) ? 'Update' : 'Simpan' }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection