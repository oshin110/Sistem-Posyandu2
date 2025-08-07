@extends('layouts.admin')

@section('title', 'Data Penimbangan')

@section('content')
<div class="section">
    <div class="container">
        <div class="section-title">
            <h2>Data Penimbangan</h2>
            <p>Berikut adalah daftar hasil penimbangan anak di Posyandu.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-4 text-end">
            <a href="{{ route('penimbangan.create') }}" class="btn btn-primary">
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
                                <th>Nama Anak</th>
                                <th>Tanggal</th>
                                <th>Berat Badan (kg)</th>
                                <th>Tinggi Badan (cm)</th>
                                <th>Lingkar Kepala (cm)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($penimbangans as $penimbangan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penimbangan->anak->nama ?? '-' }}</td>
                                    <td>{{ $penimbangan->tanggal->format('d-m-Y') }}</td>
                                    <td>{{ $penimbangan->berat_badan }}</td>
                                    <td>{{ $penimbangan->tinggi_badan }}</td>
                                    <td>{{ $penimbangan->lingkar_kepala }}</td>
                                    <td>
                                        <a href="{{ route('penimbangan.edit', $penimbangan->id) }}" class="btn btn-outline">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('penimbangan.destroy', $penimbangan->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                                    <td colspan="7" class="text-center">Belum ada data penimbangan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $penimbangans->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection