<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Anak - Sistem POSYANDU</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-top: 20px;
        }
        .search-box {
            margin-bottom: 20px;
        }
        .action-btn-group {
            white-space: nowrap;
        }
        .action-btn-group form {
            display: inline-block;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .table-header {
            background-color: #0d6efd;
            color: white;
        }
        .pagination {
            margin-top: 20px;
        }
        .btn-add {
            margin-bottom: 15px;
        }
        .alert-no-data {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="card-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="mb-0">Daftar Anak</h1>
                <a href="{{ route('anak.create') }}" class="btn btn-primary btn-add">
                    <i class="bi bi-plus-lg"></i> Tambah Data Anak
                </a>
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
                                        <span class="badge bg-primary">Laki-laki</span>
                                    @else
                                        <span class="badge bg-success">Perempuan</span>
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

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
