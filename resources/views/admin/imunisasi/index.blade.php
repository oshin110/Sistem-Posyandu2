@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Data Imunisasi</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('imunisasi.create') }}" class="btn btn-primary">Tambah Imunisasi</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Anak</th>
                <th>Jenis Imunisasi</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imunisasis as $imunisasi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $imunisasi->anak->nama ?? '-' }}</td>
                    <td>{{ $imunisasi->jenis_imunisasi }}</td>
                    <td>{{ \Carbon\Carbon::parse($imunisasi->tanggal)->format('d-m-Y') }}</td>
                    <td>{{ $imunisasi->keterangan }}</td>
                    <td>
                        <a href="{{ route('imunisasi.edit', $imunisasi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $imunisasis->links() }}
</div>
@endsection