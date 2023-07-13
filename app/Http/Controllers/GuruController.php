<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Guru::with('kelas','user')->get();
        return view('guru.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowsUser = User::all();
        $rowKelas = Kelas::all();
        return view('guru.create', compact('rowKelas', 'rowsUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Guru::create([
            'guru_id_nip' => $request->guru_id_nip,
            'guru_no' => $request->guru_no,
            'guru_nama' => $request->guru_nama,
            'guru_alamat' => $request->guru_alamat,
            'guru_hp' => $request->guru_hp,
            'guru_ktp' => $request->guru_ktp,
            'guru_jenis' => $request->guru_jenis,
            'guru_kelas' => $request->guru_kelas,
            'guru_aktif' => $request->guru_aktif,
            'guru_id_user' => $request->guru_id_user,
        ]);

        return redirect('guru');
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
        $getKelas = Kelas::all();
        $row = Guru::findOrFail($id);
        $rowUser = User::findOrFail($row->guru_id_user);
        $rowKelas = Kelas::findOrFail($row->guru_id_nip);
        return view('guru.edit', compact('row', 'rowUser', 'rowKelas', 'getKelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Guru::findOrFail($id);
        $row->update([
            'guru_id_nip' => $request->guru_id_nip,
            'guru_no' => $request->guru_no,
            'guru_nama' => $request->guru_nama,
            'guru_alamat' => $request->guru_alamat,
            'guru_hp' => $request->guru_hp,
            'guru_ktp' => $request->guru_ktp,
            'guru_jenis' => $request->guru_jenis,
            'guru_kelas' => $request->guru_kelas,
            'guru_aktif' => $request->guru_aktif,
            
        ]);

        return redirect('guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Guru::findOrFail($id);
        $row->delete();

        return redirect('guru');
    }
}
