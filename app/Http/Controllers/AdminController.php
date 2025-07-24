<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use App\Models\anak;
use App\Models\penimbangan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalIbu = ibu::all()->count();
        $totalAnak = anak::all()->count();
        $totalPenimbangan = penimbangan::all()->count();
        return view("admin.dashboard", compact("totalIbu","totalAnak","totalPenimbangan"));
    }
}
