<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Mobil;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        // Ambil semua servis dengan relasi mobil + merek
        $servis = Servis::with(['mobil.merek'])->get();

        return view('servis.index', compact('servis'));
    }

    public function create()
    {
        // Ambil semua mobil untuk dropdown
        $mobil = Mobil::with('merek')->get();

        return view('servis.create', compact('mobil'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_mobil'    => 'required|exists:tb_mobil,id_mobil',
            'nama_servis' => 'required|string|max:100',
            'biaya'       => 'required|numeric|min:0',
            'keterangan'  => 'nullable|string'
        ]);

        Servis::create([
            'id_mobil'    => $request->id_mobil,
            'nama_servis' => $request->nama_servis,
            'biaya'       => $request->biaya,
            'keterangan'  => $request->keterangan
        ]);

        return redirect()->route('servis.index')->with('success', 'Servis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $servis = Servis::findOrFail($id);
        $mobil  = Mobil::with('merek')->get();

        return view('servis.edit', compact('servis', 'mobil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_mobil'    => 'required|exists:tb_mobil,id_mobil',
            'nama_servis' => 'required|string|max:100',
            'biaya'       => 'required|numeric|min:0',
            'keterangan'  => 'nullable|string'
        ]);

        $servis = Servis::findOrFail($id);

        $servis->update([
            'id_mobil'    => $request->id_mobil,
            'nama_servis' => $request->nama_servis,
            'biaya'       => $request->biaya,
            'keterangan'  => $request->keterangan
        ]);

        return redirect()->route('servis.index')->with('success', 'Servis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();

        return redirect()->route('servis.index')->with('success', 'Servis berhasil dihapus.');
    }
}
