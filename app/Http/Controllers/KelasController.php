<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Kelas::all();
        return view('kelas.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kelas::create([
            'kelas_kode' => $request->kelas_kode,
            'kelas_nama' => $request->kelas_nama,
        ]);

        return redirect('kelas');
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
    public function edit(string $id)
    {
        $row = Kelas::findOrFail($id);
        return view('kelas.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Kelas::findOrFail($id);
        $row->update([
            'kelas_kode' => $request->kelas_kode,
            'kelas_nama' => $request->kelas_nama,
        ]);

        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Kelas::findOrFail($id);
        $row->delete();

        return redirect('kelas');
    }
}
