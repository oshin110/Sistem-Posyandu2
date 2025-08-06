@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Daftar Anak</h1>
        </div>

        <div class="search-box">
            <form method="GET" action="{{ route('anak.index') }}" class="row g-3">
                <div class="col-md-9">
                    <div class="input-group">
                        <input type="text" name="search" value="{{ request('search') }}" 
                                class="form-control" placeholder="Cari berdasarkan nama atau NIK anak...">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="bi bi-search"></i> Cari
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    @if(request('search'))
                    <a href="{{ route('anak.index') }}" class="btn btn-outline-danger w-100">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </a>
                    @endif
                </div>
            </form>
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
                            <th>Aksi</th>
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
                            <td>{{ \Carbon\Carbon::parse($anak->tanggal_lahir)->age }} tahun</td>
                            <td class="action-btn-group">
                                <a href="{{ route('anak.show', $anak->id) }}" 
                                    class="btn btn-info btn-sm" title="Detail">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('anak.edit', $anak->id) }}" 
                                    class="btn btn-warning btn-sm" title="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('anak.destroy', $anak->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            title="Hapus"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
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

