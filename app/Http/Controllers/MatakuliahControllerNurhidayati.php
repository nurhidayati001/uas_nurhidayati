<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahControllerNurhidayati extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index',compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matakuliah = new Matakuliah;
        $matakuliah->kode_matkul = $request->kode;
        $matakuliah->nama_matkul = $request->nama;
        $matakuliah->bobot = $request->bobot;
        if ($matakuliah->save()){
           return redirect()->route('matakuliah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit',compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $matakuliah = Matakuliah::find($request->id);
        $matakuliah->kode_matkul = $request->kode;
        $matakuliah->nama_matkul = $request->nama;
        $matakuliah->bobot = $request->bobot;
        if ($matakuliah->update()){
           return redirect()->route('matakuliah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        if ($matakuliah->destroy($matakuliah->id)){
            return redirect()->route('matakuliah');
         }
    }
}
