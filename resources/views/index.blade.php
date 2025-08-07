@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Daftar Anak</h1>
        </div>
        <div class="table-responsive">
            @if($anaks->count() > 0)
                <table class="table table-hover align-middle">
                    <thead class="table-header">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($anaks as $anak)
                        <tr>
                            <td>{{ $anak->nik }}</td>
                            <td>{{ $anak->nama }}</td>
                            <td>{{ $anak->tanggal_lahir->format('d-m-Y') }}</td>
                            <td>
                                @if($anak->jenis_kelamin == 'L')
                                    <span class="badge rounded-pill bg-primary">Laki-laki</span>
                                @else
                                    <span class="badge rounded-pill bg-success">Perempuan</span>
                                @endif
                            </td>
                            <td>{{ now()->year - $anak->tanggal_lahir->year }} tahun</td>
                            {{-- <td class="action-btn-group">
                                <a href="{{ route('anak.show', $anak->id) }}" class="btn btn-info btn-sm" title="Detail">
                                    <i class="bi bi-eye-fill">Detail</i>
                                </a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $anaks->links() }}
                </div>
            @else
                <div class="alert alert-no-data">
                    <i class="bi bi-exclamation-circle-fill" style="font-size: 2rem; color: #6c757d;"></i>
                    <p class="mt-3 mb-0">Tidak ada data anak yang ditemukan</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

