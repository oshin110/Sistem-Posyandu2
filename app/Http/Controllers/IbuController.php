<?php
namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function index(Request $request)
    {
        $ibus = Ibu::paginate(10);
        return view('admin.ibu.index', compact('ibus'));
    }

    public function create()
    {
        return view('admin.ibu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:ibu|digits:16',
            'nama' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Ibu::create($request->all());
        return redirect()->route('ibu.index')->with('success', 'Data ibu berhasil ditambahkan');
    }

    public function show(Ibu $ibu)
    {
        return view('ibu.show', compact('ibu'));
    }

    public function edit(Ibu $ibu)
    {
        return view('ibu.edit', compact('ibu'));
    }

    public function update(Request $request, Ibu $ibu)
    {
        $request->validate([
            'nik' => 'required|digits:16|unique:ibu,nik,' . $ibu->id,
            'nama' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $ibu->update($request->all());
        return redirect()->route('ibu.index')->with('success', 'Data ibu berhasil diperbarui');
    }

    public function destroy(Ibu $ibu)
    {
        $ibu->delete();
        return redirect()->route('ibu.index')->with('success', 'Data ibu berhasil dihapus');
    }
}
