@extends('layouts.admin')

@section('title', 'Data Ibu')
@section('content')
<div class="section">
    <div class="container">
        <div class="section-title">
            <h2>Data Ibu</h2>
            <p>Berikut adalah daftar data ibu yang terdaftar di Posyandu.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-4 text-end">
            <a href="{{ route('ibu.create') }}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Tambah Data
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Gol. Darah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ibus as $ibu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ibu->nik }}</td>
                                    <td>{{ $ibu->nama }}</td>
                                    <td>{{ $ibu->tempat_lahir }}, {{ $ibu->tanggal_lahir }}</td>
                                    <td>{{ $ibu->alamat }}</td>
                                    <td>{{ $ibu->telepon }}</td>
                                    <td>{{ $ibu->golongan_darah }}</td>
                                    <td>
                                        <a href="{{ route('ibu.edit', $ibu->id) }}" class="btn btn-outline">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('ibu.destroy', $ibu->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Belum ada data ibu.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $ibus->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection