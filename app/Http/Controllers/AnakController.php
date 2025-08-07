<?php
namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Ibu;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $anaks = Anak::with('ibu')
            ->paginate(10);
        return view('admin.anak.index', compact('anaks'));
    }

    public function create()
    {
        $ibu = Ibu::all();
        return view('admin.anak.create', compact('ibu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:anak|digits:16',
            'nama' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'berat_lahir' => 'required|numeric',
            'panjang_lahir' => 'required|numeric',
            'ibu_id' => 'required|exists:ibu,id',
        ]);

        Anak::create($request->all());
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil ditambahkan');
    }

    public function show(Anak $anak)
    {
        return view('anak.show', compact('anak'));
    }

    public function edit(Anak $anak)
    {
        $ibu = Ibu::all();
        return view('admin.anak.edit', compact('anak', 'ibu'));
    }

    public function update(Request $request, Anak $anak)
    {
        $request->validate([
            'nik' => 'required|digits:16|unique:anak,nik,' . $anak->id,
            'nama' => 'required|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'berat_lahir' => 'required|numeric',
            'panjang_lahir' => 'required|numeric',
            'ibu_id' => 'required|exists:ibu,id',
        ]);

        $anak->update($request->all());
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil diperbarui');
    }

    public function destroy(Anak $anak)
    {
        $anak->delete();
        return redirect()->route('anak.index')->with('success', 'Data anak berhasil dihapus');
    }
}
