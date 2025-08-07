@extends('layouts.admin')

@section('title', 'Edit Data Ibu')

@section('content')
<div class="section">
    <div class="container">
        <div class="section-title">
            <h2>Edit Data Ibu</h2>
            <p>Perbarui informasi ibu yang terdaftar di Posyandu.</p>
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

        <form action="{{ route('ibu.update', $ibu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" value="{{ old('nik', $ibu->nik) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $ibu->nama) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $ibu->tempat_lahir) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $ibu->tanggal_lahir) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat', $ibu->alamat) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon', $ibu->telepon) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="golongan_darah" class="form-label">Golongan Darah</label>
                        <select name="golongan_darah" id="golongan_darah" class="form-select" required>
                            <option value="">-- Pilih --</option>
                            <option value="A" {{ old('golongan_darah', $ibu->golongan_darah) == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('golongan_darah', $ibu->golongan_darah) == 'B' ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ old('golongan_darah', $ibu->golongan_darah) == 'AB' ? 'selected' : '' }}>AB</option>
                            <option value="O" {{ old('golongan_darah', $ibu->golongan_darah) == 'O' ? 'selected' : '' }}>O</option>
                        </select>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('ibu.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection