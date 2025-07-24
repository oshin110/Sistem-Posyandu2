@extends('layouts.admin')

@section('title', 'Data Penimbangan')
@section('admin-content')

<div class="table-container">
    <div class="table-header">
        <h3 class="font-bold text-lg">Data Penimbangan</h3>
        <div class="flex items-center">
            <input type="text" placeholder="Cari data penimbangan..." class="form-control mr-4 w-64">
            <a href="{{ route('admin.penimbangan.create') }}" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i> Tambah Data
            </a>
        </div>
    </div>
    
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Anak</th>
                    <th>Ibu</th>
                    <th>Berat (kg)</th>
                    <th>Tinggi (cm)</th>
                    <th>Lingkar Kepala (cm)</th>
                    <th>Petugas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10/07/2023</td>
                    <td>Ananda Putri</td>
                    <td>Siti Rahayu</td>
                    <td>6.2</td>
                    <td>62</td>
                    <td>40.5</td>
                    <td>dr. Fitri</td>
                    <td>
                        <button class="btn-icon btn-edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-icon btn-delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>10/07/2023</td>
                    <td>Bima Satria</td>
                    <td>Dewi Anggraini</td>
                    <td>5.8</td>
                    <td>60</td>
                    <td>39.8</td>
                    <td>Nurse Ayu</td>
                    <td>
                        <button class="btn-icon btn-edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-icon btn-delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>09/07/2023</td>
                    <td>Kirana Wulan</td>
                    <td>Rina Wijaya</td>
                    <td>7.1</td>
                    <td>65</td>
                    <td>41.2</td>
                    <td>dr. Fitri</td>
                    <td>
                        <button class="btn-icon btn-edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-icon btn-delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>09/07/2023</td>
                    <td>Arif Fajar</td>
                    <td>Lina Marlina</td>
                    <td>5.5</td>
                    <td>59</td>
                    <td>39.5</td>
                    <td>Nurse Ayu</td>
                    <td>
                        <button class="btn-icon btn-edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-icon btn-delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="p-4 border-t flex justify-between items-center">
        <div class="text-gray-600">Menampilkan 1-4 dari 15,628 data</div>
        <div class="flex space-x-2">
            <button class="btn-icon bg-gray-100">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="btn-icon bg-primary text-white">1</button>
            <button class="btn-icon bg-gray-100">2</button>
            <button class="btn-icon bg-gray-100">3</button>
            <span class="px-3 py-1">...</span>
            <button class="btn-icon bg-gray-100">3907</button>
            <button class="btn-icon bg-gray-100">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

@endsection