@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tambah Imunisasi</h2>

    <form action="{{ route('imunisasi.store') }}" method="POST">
        @csrf

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
            @error('anak_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_imunisasi" class="form-label">Jenis Imunisasi</label>
            <input type="text" name="jenis_imunisasi" id="jenis_imunisasi" class="form-control" value="{{ old('jenis_imunisasi') }}" required>
            @error('jenis_imunisasi') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
            @error('tanggal') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('imunisasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection