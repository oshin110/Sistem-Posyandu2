<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use App\Models\anak;
use App\Models\Imunisasi;
use App\Models\penimbangan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin yang berisi informasi jumlah data ibu, anak, dan penimbangan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $totalIbu = ibu::all()->count();
        $totalAnak = anak::all()->count();
        $totalPenimbangan = penimbangan::all()->count();
        $totalImunisasi = Imunisasi::all()->count();
        return view("admin.dashboard", compact("totalIbu","totalAnak","totalPenimbangan", "totalImunisasi"));
    }
}
