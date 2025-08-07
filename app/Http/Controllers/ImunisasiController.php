<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Anak;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        $imunisasis = Imunisasi::with('anak')->latest()->paginate(10);
        return view('admin.imunisasi.index', compact('imunisasis'));
    }

    public function create()
    {
        $anaks = Anak::all();
        return view('admin.imunisasi.create', compact('anaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anak_id' => 'required|exists:anak,id',
            'jenis_imunisasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Imunisasi::create($request->all());

        return redirect()->route('imunisasi.index')->with('success', 'Data imunisasi berhasil ditambahkan.');
    }

    public function show(Imunisasi $imunisasi)
    {
        return view('admin.imunisasi.show', compact('imunisasi'));
    }

    public function edit(Imunisasi $imunisasi)
    {
        $anaks = Anak::all();
        return view('admin.imunisasi.edit', compact('imunisasi', 'anaks'));
    }

    public function update(Request $request, Imunisasi $imunisasi)
    {
        $request->validate([
            'anak_id' => 'required|exists:anak,id',
            'jenis_imunisasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $imunisasi->update($request->all());

        return redirect()->route('imunisasi.index')->with('success', 'Data imunisasi berhasil diperbarui.');
    }

    public function destroy(Imunisasi $imunisasi)
    {
        $imunisasi->delete();
        return redirect()->route('imunisasi.index')->with('success', 'Data imunisasi berhasil dihapus.');
    }
}