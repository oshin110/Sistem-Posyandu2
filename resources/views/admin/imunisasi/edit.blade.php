@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Imunisasi</h2>

    <form action="{{ route('imunisasi.update', $imunisasi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="anak_id" class="form-label">Nama Anak</label>
            <select name="anak_id" id="anak_id" class="form-select" required>
                @foreach($anaks as $anak)
                    <option value="{{ $anak->id }}" {{ $imunisasi->anak_id == $anak->id ? 'selected' : '' }}>
                        {{ $anak->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jenis_imunisasi" class="form-label">Jenis Imunisasi</label>
            <input type="text" name="jenis_imunisasi" id="jenis_imunisasi" class="form-control" value="{{ old('jenis_imunisasi', $imunisasi->jenis_imunisasi) }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $imunisasi->tanggal->format('Y-m-d')) }}" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan', $imunisasi->keterangan) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('imunisasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection