<?php

namespace App\Http\Controllers;

use App\Models\Penimbangan;
use App\Models\Anak;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penimbangans = Penimbangan::with('anak')->latest()->paginate(10);
        return view('admin.penimbangan.index', compact('penimbangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anaks = Anak::all();
        return view('admin.penimbangan.create', compact('anaks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anak_id' => 'required|exists:anak,id',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric|min:0',
            'tinggi_badan' => 'required|numeric|min:0',
            'lingkar_kepala' => 'required|numeric|min:0',
        ]);

        Penimbangan::create($request->all());

        return redirect()->route('penimbangan.index')->with('success', 'Data penimbangan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penimbangan $penimbangan)
    {
        $anaks = Anak::all();
        return view('admin.penimbangan.edit', compact('penimbangan', 'anaks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penimbangan $penimbangan)
    {
        $request->validate([
            'anak_id' => 'required|exists:anak,id',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric|min:0',
            'tinggi_badan' => 'required|numeric|min:0',
            'lingkar_kepala' => 'required|numeric|min:0',
        ]);

        $penimbangan->update($request->all());

        return redirect()->route('penimbangan.index')->with('success', 'Data penimbangan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penimbangan $penimbangan)
    {
        $penimbangan->delete();
        return redirect()->route('penimbangan.index')->with('success', 'Data penimbangan berhasil dihapus.');
    }
}