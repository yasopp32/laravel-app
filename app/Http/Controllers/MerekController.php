<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Merek::all();
        return view('merek.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('merek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Merek::create([
            'id_merek' => $request->id_merek,
            'nama_merek' => $request->nama_merek,
        ]);
        
        return redirect('/merek');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $row = Merek::findOrFail($id);
        return view('merek.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $row = Merek::findOrFail($id);
        $row->update([
            'nama_merek' => $request->nama_merek,
        ]);

        return redirect('/merek');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Merek::findOrFail($id);  // Mengambil data berdasarkan ID
        $row->delete();  // Menghapus data

        return redirect('/merek');  // Redirect setelah penghapusan
    }

}