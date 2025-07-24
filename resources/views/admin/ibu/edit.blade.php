@extends('layouts.admin')

@section('title', 'Edit Data Ibu')
@section('admin-content')

<div class="table-container">
    <div class="table-header">
        <h3 class="font-bold text-lg">Edit Data Ibu</h3>
        <a href="{{ route('admin.ibu.index') }}" class="btn btn-outline">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>
    
    <form class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="form-group">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" id="nik" class="form-control" value="1234567890123456">
            </div>
            
            <div class="form-group">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" id="nama" class="form-control" value="Siti Rahayu">
            </div>
            
            <div class="form-group">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" class="form-control" value="Jakarta">
            </div>
            
            <div class="form-group">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" class="form-control" value="1990-05-15">
            </div>
            
            <div class="form-group md:col-span-2">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <textarea id="alamat" class="form-control" rows="3">Jl. Melati No. 12, Jakarta</textarea>
            </div>
            
            <div class="form-group">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" id="telepon" class="form-control" value="081234567890">
            </div>
            
            <div class="form-group">
                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                <select id="golongan_darah" class="form-control">
                    <option value="">Pilih Golongan Darah</option>
                    <option value="A" selected>A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                    <option value="-">Tidak Tahu</option>
                </select>
            </div>
        </div>
        
        <div class="mt-8 flex justify-end">
            <button type="reset" class="btn btn-outline mr-4">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>

@endsection