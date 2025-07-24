@extends('layouts.admin')

@section('title', 'Data Anak')

@section('content')
<div class="section">
    <div class="container">
        <div class="section-title">
            <h2>Data Anak</h2>
            <p>Berikut adalah daftar data anak yang terdaftar di Posyandu.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-4 text-end">
            <a href="{{ route('anak.create') }}" class="btn btn-primary">+ Tambah Anak</a>
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
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Ibu</th>
                                <th>Berat (kg)</th>
                                <th>Panjang (cm)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($anaks as $anak)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $anak->nik }}</td>
                                    <td>{{ $anak->nama }}</td>
                                    <td>{{ $anak->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                    <td>{{ $anak->tanggal_lahir }}</td>
                                    <td>{{ $anak->ibu->nama ?? '-' }}</td>
                                    <td>{{ $anak->berat_lahir }}</td>
                                    <td>{{ $anak->panjang_lahir }}</td>
                                    <td>
                                        <a href="{{ route('anak.edit', $anak->id) }}" class="btn btn-outline">Edit</a>
                                        <form action="{{ route('anak.destroy', $anak->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Belum ada data anak.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $anaks->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection