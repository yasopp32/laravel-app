<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Merek;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        public function index()
    {
        // Mengambil semua data mobil beserta merek terkait
        $mobil = Mobil::with('merek')->get();
        return view('mobil.index', compact('mobil'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua data merek untuk pilihan saat membuat mobil baru
        $merek = Merek::all();
        return view('mobil.create', compact('merek'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Validasi data yang diterima
        $request->validate([
            'id_merek' => 'required|exists:tb_merek,id_merek',
            'nama_mobil' => 'required|string|max:100',
            'tahun' => 'nullable|integer',
        ]);

        // Menyimpan data mobil baru
        Mobil::create([
            'id_merek' => $request->id_merek,
            'nama_mobil' => $request->nama_mobil,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan data mobil berdasarkan ID dan merek terkait
        $mobil = Mobil::with('merek')->findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mengambil data mobil berdasarkan ID dan semua data merek
        $mobil = Mobil::findOrFail($id);
        $merek = Merek::all();
        return view('mobil.edit', compact('mobil', 'merek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'id_merek' => 'required|exists:tb_merek,id_merek',
            'nama_mobil' => 'required|string|max:100',
            'tahun' => 'nullable|integer',
        ]);

        // Mencari dan mengupdate data mobil
        $mobil = Mobil::findOrFail($id);
        $mobil->update([
            'id_merek' => $request->id_merek,
            'nama_mobil' => $request->nama_mobil,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari dan menghapus data mobil
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
