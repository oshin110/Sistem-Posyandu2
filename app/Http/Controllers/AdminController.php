<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use App\Models\anak;
use App\Models\penimbangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin yang berisi informasi jumlah data ibu, anak, dan penimbangan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(Auth::user()->role !== 'admin'){
            abort(403, 'Anda tidak memiliki Akses');
        }

        $totalIbu = ibu::all()->count();
        $totalAnak = anak::all()->count();
        $totalPenimbangan = penimbangan::all()->count();
        return view("admin.dashboard", compact("totalIbu","totalAnak","totalPenimbangan"));
    }
}
